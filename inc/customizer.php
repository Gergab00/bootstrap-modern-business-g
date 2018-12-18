<?php
function perzonalizarTema($wp_customize){
    require_once get_template_directory() . '/inc/customizer-control.php';
    // Section Carrousel
    $wp_customize->add_section('carrousel_header_section', array(
        'title' => 'Ajustes Carrousel Cabecera',
        'description' => 'Selecciona lo que aparecera en la cabecera',
        'priority' => 22,
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_setting('carrousel_header', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    // Setting - drop down category for slider.
    $wp_customize->add_control(new Category_Dropdown_Custom_control($wp_customize, 'carrousel_header', array(
        'label' => 'Seleccion de categorias',
        'section' => 'carrousel_header_section',
        'type' => 'dropdown-taxonomies'
    )));
    // Fin Section Carrousel
    // Section tarjetas principales
    $wp_customize->add_section('tarjetas_servicios_section', array(
        'title' => 'Tarjetas Servicios',
        'description' => 'Seccion para agregar escoger las paginas que se colocaran en las tarjetas de servicios',
        'priority' => 25,
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_setting('tarjetas_servicios_1', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new PagesPost_Dropdown_Custom_control($wp_customize,'tarjetas_servicios_1', array(
        'label' => 'Tarjeta 1',
        'section' => 'tarjetas_servicios_section',
        'priority' => 1,
        'type' => 'dropdown-pagepost'
    )));
    $wp_customize->add_setting('tarjetas_servicios_2', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new PagesPost_Dropdown_Custom_control($wp_customize,'tarjetas_servicios_2', array(
        'label' => 'Tarjeta 2',
        'section' => 'tarjetas_servicios_section',
        'priority' => 2,
        'type' => 'dropdown-pagepost'
    )));
    $wp_customize->add_setting('tarjetas_servicios_3', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new PagesPost_Dropdown_Custom_control($wp_customize,'tarjetas_servicios_3', array(
        'label' => 'Tarjeta 3',
        'section' => 'tarjetas_servicios_section',
        'priority' => 3,
        'type' => 'dropdown-pages'
    )));
    // Fin Section tarjetas principales
    // Section Blog
    $wp_customize->add_section('blog_section', array(
        'title' => 'Blog',
        'description' => 'Configura la seccion de Blog',
        'priority' => 26,
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_setting('blog_catgegory', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    // Setting - drop down category for slider.
    $wp_customize->add_control(new Category_Dropdown_Custom_control($wp_customize, 'blog_catgegory', array(
        'label' => 'Seleccion de categorias',
        'section' => 'blog_section',
        'priority' => 1,
        'type' => 'dropdown-taxonomies'
    )));
    $wp_customize->add_setting('blog_number', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('blog_number', array(
        'label' => 'Cantidad de post al inicio',
        'section' => 'blog_section',
        'priority' => 2,
        'type' => 'number',
        'input_attrs' => array(
            'min' => 1,
            'value' => 3
        )
    ));
    // Fin Section Blog
    // Section Nube de Etiquetas
    $wp_customize->add_section('tag_cloud_section', array(
        'title' => 'Nube de Etiquetas',
        'description' => 'Sección para agregar escoger nubes de etiquetas predefinidas por las entradas',
        'priority' => 27,
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_setting('tag_cloud', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    // Setting - drop down category for slider.
    $wp_customize->add_control(new TagsCloud_Dropdown_Custom_control($wp_customize, 'tag_cloud', array(
        'label' => 'Seleccion de nube de etiquetas',
        'section' => 'tag_cloud_section',
        'type' => 'dropdown-tagcloud'
    )));
    // Fin Section Nube de Etiquetas
    // Section Sobre nosotros
    $wp_customize->add_section('our_us_section', array(
        'title' => 'Sobre nosotros',
        'description' => 'Sección para agregar informacion sobre el negocio',
        'priority' => 28,
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_setting('our_us_title', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('our_us_title', array(
        'label' => 'Titulo:',
        'section' => 'our_us_section',
        'priority' => 1,
        'type' => 'text'
    ));
    $wp_customize->add_setting('our_us_subtitle_1', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('our_us_subtitle_1', array(
        'label' => 'Subtitulo 1:',
        'section' => 'our_us_section',
        'priority' => 2,
        'type' => 'text'
    ));
    $wp_customize->add_setting('our_us_content_1', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('our_us_content_1', array(
        'label' => 'Contenido 1:',
        'description' => 'Agrega la primera información de tu negocio. Admite HTLM',
        'section' => 'our_us_section',
        'priority' => 3,
        'type' => 'textarea'
    ));
    $wp_customize->add_setting('our_us_subtitle_2', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('our_us_subtitle_2', array(
        'label' => 'Subtitulo 2:',
        'section' => 'our_us_section',
        'priority' => 4,
        'type' => 'text'
    ));
    $wp_customize->add_setting('our_us_content_2', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('our_us_content_2', array(
        'label' => 'Contenido 2:',
        'description' => 'Agrega la segunda información de tu negocio. Admite HTLM',
        'section' => 'our_us_section',
        'priority' => 5,
        'type' => 'textarea'
    ));
    $wp_customize->add_setting('our_us_image', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control(new WP_Customize_Media_Control($wp_customize, 'our_us_image', array(
        'label' => 'Imagen:',
        'description' => 'Agrega una imagen representativa',
        'section' => 'our_us_section',
        'priority' => 6,
        'mime_type' => 'image'
    )));
    $wp_customize->add_setting('our_us_page', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('our_us_page', array(
        'label' => 'Página de nosotros',
        'description' => 'Puedes ecoger una pagina extendida para mostrar mas acerca de nsotros',
        'section' => 'our_us_section',
        'priority' => 7,
        'type' => 'dropdown-pages'
    ));
    $wp_customize->add_setting('our_us_page_extract', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('our_us_page_extract', array(
        'label' => 'Extracto o pagina completa',
        'description' => 'Escoge si quieres elegir parte del extracto la pagina completa',
        'section' => 'our_us_section',
        'priority' => 8,
        'type' => 'radio',
        'choices' => array(
            true => 'Pagina completa',
            false => 'Extracto de Página'
        )
    ));
    // Fin Section Sobre nosotros
    // Section Call to Action
    $wp_customize->add_section('call_to_action_section', array(
        'title' => 'Llamada a la acción',
        'description' => 'Seccion para escoger las llamadas a la accion que apareceran en tu pagina. Tambien podras posicionar estos botones en cualquier pagina o entrada usando el shortcode [callToAction]',
        'priority' => 29,
        'capability' => 'edit_theme_options'
    ));
    // Boton 1
    $wp_customize->add_setting('call_to_action_type_1', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_type_1', array(
        'label' => 'Tipo de llamada 1',
        'description' => 'Escoge el tipo de llamada a la accion',
        'section' => 'call_to_action_section',
        'priority' => 1,
        'type' => 'select',
        'choices' => array(
            'default' => '',
            'mensaje' => 'Enviar Mensaje',
            'llamar' => 'Llamar',
            'registrar' => 'Registrar',
            'comprar' => 'Comprar',
            'descargar' => 'Descargar'
        )
    ));
    $wp_customize->add_setting('call_to_action_text_1', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_text_1', array(
        'description' => 'Texto del boton. Por default se pone el tipo que se escoge',
        'section' => 'call_to_action_section',
        'priority' => 2,
        'type' => 'text'
    ));
    $wp_customize->add_setting('call_to_action_link_1', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_link_1', array(
        'description' => 'URL del link',
        'section' => 'call_to_action_section',
        'priority' => 3,
        'type' => 'url'
    ));
    // Boton 2
    $wp_customize->add_setting('call_to_action_type_2', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_type_2', array(
        'label' => 'Tipo de llamada 2',
        'description' => 'Escoge el tipo de llamada a la acción',
        'section' => 'call_to_action_section',
        'priority' => 4,
        'type' => 'select',
        'choices' => array(
            'default' => '',
            'mensaje' => 'Enviar Mensaje',
            'llamar' => 'Llamar',
            'registrar' => 'Registrar',
            'comprar' => 'Comprar',
            'descargar' => 'Descargar'
        )
    ));
    $wp_customize->add_setting('call_to_action_text_2', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_text_2', array(
        'description' => 'Texto del boton. Por default se pone el tipo que se escoge',
        'section' => 'call_to_action_section',
        'priority' => 5,
        'type' => 'text'
    ));
    $wp_customize->add_setting('call_to_action_link_2', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_link_2', array(
        'description' => 'URL del link',
        'section' => 'call_to_action_section',
        'priority' => 6,
        'type' => 'url'
    ));
    // Boton 3
    $wp_customize->add_setting('call_to_action_type_3', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_type_3', array(
        'label' => 'Tipo de llamada 3',
        'description' => 'Escoge el tipo de llamada a la acción',
        'section' => 'call_to_action_section',
        'priority' => 7,
        'type' => 'select',
        'choices' => array(
            'default' => '',
            'mensaje' => 'Enviar Mensaje',
            'llamar' => 'Llamar',
            'registrar' => 'Registrar',
            'comprar' => 'Comprar',
            'descargar' => 'Descargar'
        )
    ));
    $wp_customize->add_setting('call_to_action_text_3', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_text_3', array(
        'description' => 'Texto del boton. Por default se pone el tipo que se escoge',
        'section' => 'call_to_action_section',
        'priority' => 8,
        'type' => 'text'
    ));
    $wp_customize->add_setting('call_to_action_link_3', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_link_3', array(
        'description' => 'URL del link',
        'section' => 'call_to_action_section',
        'priority' => 9,
        'type' => 'url'
    ));
    // Boton 4
    $wp_customize->add_setting('call_to_action_type_4', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_type_4', array(
        'label' => 'Tipo de llamada 4',
        'description' => 'Escoge el tipo de llamada a la acción',
        'section' => 'call_to_action_section',
        'priority' => 10,
        'type' => 'select',
        'choices' => array(
            'default' => '',
            'mensaje' => 'Enviar Mensaje',
            'llamar' => 'Llamar',
            'registrar' => 'Registrar',
            'comprar' => 'Comprar',
            'descargar' => 'Descargar'
        )
    ));
    $wp_customize->add_setting('call_to_action_text_4', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_text_4', array(
        'description' => 'Texto del boton. Por default se pone el tipo que se escoge',
        'section' => 'call_to_action_section',
        'priority' => 11,
        'type' => 'text'
    ));
    $wp_customize->add_setting('call_to_action_link_4', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_link_4', array(
        'description' => 'URL del link',
        'section' => 'call_to_action_section',
        'priority' => 12,
        'type' => 'url'
    ));
    // Boton 5
    $wp_customize->add_setting('call_to_action_type_5', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_type_5', array(
        'label' => 'Tipo de llamada 5',
        'description' => 'Escoge el tipo de llamada a la acción',
        'section' => 'call_to_action_section',
        'priority' => 13,
        'type' => 'select',
        'choices' => array(
            'default' => '',
            'mensaje' => 'Enviar Mensaje',
            'llamar' => 'Llamar',
            'registrar' => 'Registrar',
            'comprar' => 'Comprar',
            'descargar' => 'Descargar'
        )
    ));
    $wp_customize->add_setting('call_to_action_text_5', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_text_5', array(
        'description' => 'Texto del boton. Por default se pone el tipo que se escoge',
        'section' => 'call_to_action_section',
        'priority' => 14,
        'type' => 'text'
    ));
    $wp_customize->add_setting('call_to_action_link_5', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_link_5', array(
        'description' => 'URL del link',
        'section' => 'call_to_action_section',
        'priority' => 15,
        'type' => 'url'
    ));
    // Boton 6
    $wp_customize->add_setting('call_to_action_type_6', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_type_6', array(
        'label' => 'Tipo de llamada 6',
        'description' => 'Escoge el tipo de llamada a la acción',
        'section' => 'call_to_action_section',
        'priority' => 16,
        'type' => 'select',
        'choices' => array(
            'default' => '',
            'mensaje' => 'Enviar Mensaje',
            'llamar' => 'Llamar',
            'registrar' => 'Registrar',
            'comprar' => 'Comprar',
            'descargar' => 'Descargar'
        )
    ));
    $wp_customize->add_setting('call_to_action_text_6', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_text_6', array(
        'description' => 'Texto del boton. Por default se pone el tipo que se escoge',
        'section' => 'call_to_action_section',
        'priority' => 17,
        'type' => 'text'
    ));
    $wp_customize->add_setting('call_to_action_link_6', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('call_to_action_link_6', array(
        'description' => 'URL del link',
        'section' => 'call_to_action_section',
        'priority' => 18,
        'type' => 'url'
    ));
    // Fin Section Call to Action
    // Seccion Shortcode MailChimp
    $wp_customize->add_section('mailchimp_section', array(
        'title' => 'MailChimp',
        'description' => 'Agrega el shortcode de MailChip',
        'priority' => 28,
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_setting('mailchimp_shortcode', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options'
    ));
    $wp_customize->add_control('mailchimp_shortcode', array(
        'label' => 'Shortcode',
        'section' => 'mailchimp_section',
        'priority' => 1,
        'type' => 'text'
    ));
    // Fin Seccion Shortcode MailChimp
}
add_action('customize_register', 'perzonalizarTema');
?>