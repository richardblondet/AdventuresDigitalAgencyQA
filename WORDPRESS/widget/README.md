Wordpress Widget
===

Esta es una contribución de Khromov, que podemos encontrar [aquí](https://github.com/khromov/wp-better-starter-widget). Utilizamos esta clase para registrar nuestros widgets en nuestro tema o como plugin, dependiendo de la necesidad en cuanto al proyecto se refiera. La idea y la intención perseguida de usar una clase base es, implementar widgets en el mismo idioma, modulares y de fácil uso

Si deseamos que esté incluido exclusivamente en el tema desarrollado, en el archivo `functions.php` agregamos:

    /**
    * Agrega nuestros widgets personalizados a Wordpress
    *
    * Este código corre después de 'after_theme_setup', es decir cuando el tema
    *  ya ha sido configurado. 
    *  
    * @link http://alexking.org/blog/2012/0709/include-plugin-in-wordpress-theme
    */
    add_action('after_theme_setup', 'cargar_widgets_personalizados');
    /** Función a ser ejecutada por el hook */
    function cargar_widgets_personalizados() {
	    
	    /** cargar Widget_Base_Para_Wordress que se encuentra en nuestro tema en el directorio widgets */
	    if(! class_exists('Widget_Base_Para_Wordress') ){
		    include_once( TEMPLATEPATH . '/widgtes/widget-base-para-wordpress/widget-base-para-wordpress.php' );
	    }
	    
    }

En cambio si no exclusivo del tema, incluir como plugin en en el directorio de plugins. 