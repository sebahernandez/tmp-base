<?php


  // hook para cargar archivos JS y CSS 
  add_action('wp_enqueue_scripts' , 'insertar_js_css');
  function insertar_js_css()
  {
    // llamamos jquery desde el core de wordpress
    // wp_enqueue_script('jquery',1,true);

    // JS vendor (script de terceros)
    wp_register_script('vendorJS' , get_template_directory_uri() . '/js/vendorjs.min.js' , array('jquery') ,1,true);
    wp_enqueue_script('vendorJS');

    // JS nuestro
    wp_register_script('mainJS' , get_template_directory_uri() . '/js/main.js' , array('jquery') ,1,true);
    wp_enqueue_script('mainJS');


    //  Css vendor - (css de terceros)
    wp_register_style("vendorcss", get_template_directory_uri() . '/css/vendorcss.min.css');
    wp_enqueue_style("vendorcss");
  }