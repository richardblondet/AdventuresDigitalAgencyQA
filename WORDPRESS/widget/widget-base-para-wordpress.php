<?php
/*
Plugin Name: Widget Base Para Wordpress
Plugin URI: http://adventures.do
Description: Descripción del Plugin
Version: 1.0
Author: Adventures Digital Agency
Author URI: mailto:autor@adventures.do
*/

/**
 * Wordpress hook para registrar el widget
 */
add_action( 'widgets_init', create_function( '', 'return register_widget("Widget_Base_Para_Wordress");' ) );

/**
 * Class Widget_Base_Para_Wordress
 */
class Widget_Base_Para_Wordress extends WP_Widget {
	
	/** Condiguraciones del widget */
	const WIDGET_NAME = "Nombre del Widget";
	const WIDGET_DESCRIPTION = "Descripción del Widget";

	var $textdomain;
	var $fields;

	/**
	 * Construct the widget
	 */
	function __construct() {
		
		// Vamos a usar $this->textdomain tanto como el ID e identicador de idioma del widget
		$this->textdomain = strtolower(get_class($this));

		// Para identificar cuáles son estos valores, verifique:
		//var_dump($this->textdomain);

		// Agregar Campos
		$this->add_field('title', 'Enter title', '', 'text');
		$this->add_field('example_field', 'Example field', 'This is the default value', 'text');

		// Traducciones
		load_plugin_textdomain($this->textdomain, false, basename(dirname(__FILE__)) . '/languages' );

		// Inicializar el widget
		parent::__construct($this->textdomain, __(self::WIDGET_NAME, $this->textdomain), array( 'description' => __(self::WIDGET_DESCRIPTION, $this->textdomain), 'classname' => $this->textdomain));
	}

	/**
	 * Frontend del Widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		$title = apply_filters('widget_title', $instance['title']);

		/* Los antes y despues del widget generalmente están determinados por cómo se inicializan los saidebar por tema */
		echo $args['before_widget'];

		if (! empty($title) )  // Mostramos el titulo cómo lo determine el tema
			echo $args['before_title'] . $title . $args['after_title'];

		/* Widget output here */
		$this->widget_output($args, $instance);

		/* Después del Widget */
		echo $args['after_widget'];
	}
	
	/**
	 * Esta función ejecutará la lógica del frontend del widget
	 */
	private function widget_output( $args, $instance ) {
		extract($instance);

		/**
		 * Aquí escribimos nuestro código / damos funcionalidad
		 */
		?>
			<p>
				Aquí está el widget <?php echo $title; ?> <br/>
				y aquí está nuestro campo ejemplo: <?php echo $example_field; ?>
				<!-- La variable anterior también puede accederse a través de $instance['example_field']; -->
			</p>
		<?php
	}

	/**
	 * El Backend del Widget
	 *
	 * @param array $instance
	 * @return string|void
	 */
	public function form( $instance ) {
		/* Generamos los Campos agredados automáticamente */
		foreach( $this->fields as $field_name => $field_data ) {
			
			if( $field_data['type'] === 'text' ):
				?>
				<p>
					<label for="<?php echo $this->get_field_id($field_name); ?>"><?php _e($field_data['description'], $this->textdomain ); ?></label>
					<input class="widefat" id="<?php echo $this->get_field_id($field_name); ?>" name="<?php echo $this->get_field_name($field_name); ?>" type="text" value="<?php echo esc_attr(isset($instance[$field_name]) ? $instance[$field_name] : $field_data['default_value']); ?>" />
				</p>
			<?php
			// elseif( $field_data['type'] == 'textarea' ):
			// Puedes implementar más campos de la misma manera
			else:
				echo __('Error - Tipo de campo no específicado', $this->textdomain) . ': ' . $field_data['type'];
			endif;
		}
	}

	/**
	 * Agrega campos de texto a nuestro widget
	 *
	 * @param $field_name
	 * @param string $field_description
	 * @param string $field_default_value
	 * @param string $field_type
	 */
	private function add_field( $field_name, $field_description = '', $field_default_value = '', $field_type = 'text' ) {
		
		if( !is_array($this->fields) )
			$this->fields = array();

		$this->fields[$field_name] = array('name' => $field_name, 'description' => $field_description, 'default_value' => $field_default_value, 'type' => $field_type);
	}

	/**
	 * Actualiza nuestro widget y sus valores
	 *
	 * @param array $new_instance
	 * @param array $old_instance
	 * @return array
	 */
	public function update( $new_instance, $old_instance ) {
		return $new_instance;
	}
}