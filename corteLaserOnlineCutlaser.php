<?php
/*
Plugin Name: Corte Laser Online
Plugin URI: https://www.cortelaseronline.es
Description: Personalizador de cortes láser
Version: 1.0
Author: Neil Barazarte
Author URI: https://www.ploshshop.com
License: GPLv2
*/

//Archivos css y js propios del plugin:
//include(plugin_dir_url(__FILE__).'funciones.php');

// Register Style
function custom_styles_CortesLaser() {

    wp_register_style( 'dv-custom', plugin_dir_url(__FILE__).'css/custom.css', false, '1.0' );
    wp_enqueue_style( 'dv-custom' );

}
add_action( 'wp_enqueue_scripts', 'custom_styles_CortesLaser',10 );

// Register Script
function custom_scripts_CortesLaser() {

    wp_register_script( 'main', plugin_dir_url(__FILE__).'js/custom.js', array( 'jquery' ), '1.0', true );
    wp_enqueue_script( 'main' );

}
add_action( 'wp_enqueue_scripts', 'custom_scripts_CortesLaser' );



# Agregar informacion predeterminada al activar el plugin
//Este Script se correra en 3 momentos: Al activar por primera vez, al actualizar, al reactivar
register_activation_hook( __FILE__, 'cn_set_default_options_CortesLaser' );

function cn_set_default_options_CortesLaser() {

    // Revisar si ya se habia activado antes

    if ( get_option( 'cn_id_producto_personalizado_CortesLaser' ) === false ) {
        add_option( 'cn_id_producto_personalizado_CortesLaser', '0' );
    }

    //Precio Chopo:
    if ( get_option( 'precio_chopo_3mm' ) === false ) {
        add_option( 'precio_chopo_3mm', '7.5' );
    }

    if ( get_option( 'precio_chopo_4mm' ) === false ) {
        add_option( 'precio_chopo_4mm', '8.05' );
    }

    if ( get_option( 'precio_chopo_5mm' ) === false ) {
        add_option( 'precio_chopo_5mm', '8.45' );
    }        

    if ( get_option( 'precio_chopo_6mm' ) === false ) {
        add_option( 'precio_chopo_6mm', '9.5' );
    }

    if ( get_option( 'precio_chopo_8mm' ) === false ) {
        add_option( 'precio_chopo_8mm', '10.25' );
    }

    if ( get_option( 'precio_chopo_10mm' ) === false ) {
        add_option( 'precio_chopo_10mm', '11.9' );
    } 
    
    //Precio Mdf:
    if ( get_option( 'precio_mdf_25mm' ) === false ) {
        add_option( 'precio_mdf_25mm', '7' );
    }

    if ( get_option( 'precio_mdf_3mm' ) === false ) {
        add_option( 'precio_mdf_3mm', '7.45' );
    }

    if ( get_option( 'precio_mdf_4mm' ) === false ) {
        add_option( 'precio_mdf_4mm', '8.1' );
    }        

    if ( get_option( 'precio_mdf_5mm' ) === false ) {
        add_option( 'precio_mdf_5mm', '9.05' );
    }

    if ( get_option( 'precio_mdf_7mm' ) === false ) {
        add_option( 'precio_mdf_7mm', '11' );
    }

    //Precio Mukaly:
    if ( get_option( 'precio_mukaly_2mm' ) === false ) {
        add_option( 'precio_mukaly_2mm', '15' );
    }

    //Precio Pmma:
    if ( get_option( 'precio_metacrilato_2mm' ) === false ) {
        add_option( 'precio_metacrilato_2mm', '14' );
    }

    if ( get_option( 'precio_metacrilato_3mm' ) === false ) {
        add_option( 'precio_metacrilato_3mm', '24' );
    }

    if ( get_option( 'precio_metacrilato_4mm' ) === false ) {
        add_option( 'precio_metacrilato_4mm', '32' );
    }        

    if ( get_option( 'precio_metacrilato_5mm' ) === false ) {
        add_option( 'precio_metacrilato_5mm', '40' );
    }

    if ( get_option( 'precio_metacrilato_6mm' ) === false ) {
        add_option( 'precio_metacrilato_6mm', '48' );
    } 

    if ( get_option( 'precio_metacrilato_8mm' ) === false ) {
        add_option( 'precio_metacrilato_8mm', '66' );
    }

    if ( get_option( 'precio_metacrilato_10mm' ) === false ) {
        add_option( 'precio_metacrilato_10mm', '82' );
    }             

}

#Agregar esta condiguración al menu
function cn_menu_ajustes_CortesLaser() {
    add_options_page( 'Corte Láser Online', //Título de la página
                      'Corte Láser Online', //Nombre del menú
                      'manage_options', //Nivel de acceso, solo usuarios
                      'cn-conf-ga-cutlaser', // slug
                      'cn_genera_pagina_CortesLaser' ); //Función que procesará todo
}

add_action( 'admin_menu', 'cn_menu_ajustes_CortesLaser' );

//Generar el codigo de la pagina de actualización
function cn_genera_pagina_CortesLaser() {

  // Conseguir el valor del Precio base de todos los elementos:
  $cn_id_producto_personalizado_CortesLaser   = get_option( 'cn_id_producto_personalizado_CortesLaser' ) ;
  
  $precio_chopo_3mm                           = get_option( 'precio_chopo_3mm' ) ;
  $precio_chopo_4mm                           = get_option( 'precio_chopo_4mm' ) ;
  $precio_chopo_5mm                           = get_option( 'precio_chopo_5mm' ) ;
  $precio_chopo_6mm                           = get_option( 'precio_chopo_6mm' ) ;
  $precio_chopo_8mm                           = get_option( 'precio_chopo_8mm' ) ;
  $precio_chopo_10mm                          = get_option( 'precio_chopo_10mm' ) ;

  $precio_mdf_25mm                            = get_option( 'precio_mdf_25mm' ) ;
  $precio_mdf_3mm                             = get_option( 'precio_mdf_3mm' ) ;
  $precio_mdf_4mm                             = get_option( 'precio_mdf_4mm' ) ;
  $precio_mdf_5mm                             = get_option( 'precio_mdf_5mm' ) ;
  $precio_mdf_7mm                             = get_option( 'precio_mdf_7mm' ) ;

  $precio_mukaly_2mm                          = get_option( 'precio_mukaly_2mm' ) ;

  $precio_metacrilato_2mm                     = get_option( 'precio_metacrilato_2mm' ) ;
  $precio_metacrilato_3mm                     = get_option( 'precio_metacrilato_3mm' ) ;
  $precio_metacrilato_4mm                     = get_option( 'precio_metacrilato_4mm' ) ;
  $precio_metacrilato_5mm                     = get_option( 'precio_metacrilato_5mm' ) ;
  $precio_metacrilato_6mm                     = get_option( 'precio_metacrilato_6mm' ) ;
  $precio_metacrilato_8mm                     = get_option( 'precio_metacrilato_8mm' ) ;
  $precio_metacrilato_10mm                    = get_option( 'precio_metacrilato_10mm' ) ;

  require('formularioAdmin/configuracionesForm.php');
}

add_action( 'admin_post_guardar_ga', 'cn_guardar_ga_CortesLaser' );

function cn_guardar_ga_CortesLaser() {
    // Revisar el permiso de autorización
    if ( !current_user_can( 'manage_options' ) ) {
        wp_die( 'Not allowed' );
    }

    // Revisar el token que creamos antes
    check_admin_referer( 'token_ga' );

    //Limpiar valor, para prevenir problemas de seguridad
    $cn_id_producto_personalizado_CortesLaser   = sanitize_text_field( $_POST['cn_id_producto_personalizado_CortesLaser'] );

    $precio_chopo_3mm                           = sanitize_text_field( $_POST[ 'precio_chopo_3mm' ] );
    $precio_chopo_4mm                           = sanitize_text_field( $_POST[ 'precio_chopo_4mm' ] );
    $precio_chopo_5mm                           = sanitize_text_field( $_POST[ 'precio_chopo_5mm' ] );
    $precio_chopo_6mm                           = sanitize_text_field( $_POST[ 'precio_chopo_6mm' ] );
    $precio_chopo_8mm                           = sanitize_text_field( $_POST[ 'precio_chopo_8mm' ] );
    $precio_chopo_10mm                          = sanitize_text_field( $_POST[ 'precio_chopo_10mm' ] );

    $precio_mdf_25mm                            = sanitize_text_field( $_POST[ 'precio_mdf_25mm' ] );
    $precio_mdf_3mm                             = sanitize_text_field( $_POST[ 'precio_mdf_3mm' ] );
    $precio_mdf_4mm                             = sanitize_text_field( $_POST[ 'precio_mdf_4mm' ] );
    $precio_mdf_5mm                             = sanitize_text_field( $_POST[ 'precio_mdf_5mm' ] );
    $precio_mdf_7mm                             = sanitize_text_field( $_POST[ 'precio_mdf_7mm' ] );

    $precio_mukaly_2mm                          = sanitize_text_field( $_POST[ 'precio_mukaly_2mm' ] );

    $precio_metacrilato_2mm                     = sanitize_text_field( $_POST[ 'precio_metacrilato_2mm' ] );
    $precio_metacrilato_3mm                     = sanitize_text_field( $_POST[ 'precio_metacrilato_3mm' ] );
    $precio_metacrilato_4mm                     = sanitize_text_field( $_POST[ 'precio_metacrilato_4mm' ] );
    $precio_metacrilato_5mm                     = sanitize_text_field( $_POST[ 'precio_metacrilato_5mm' ] );
    $precio_metacrilato_6mm                     = sanitize_text_field( $_POST[ 'precio_metacrilato_6mm' ] );
    $precio_metacrilato_8mm                     = sanitize_text_field( $_POST[ 'precio_metacrilato_8mm' ] );
    $precio_metacrilato_10mm                    = sanitize_text_field( $_POST[ 'precio_metacrilato_10mm' ] );

    // Guardar en la base de datos
    update_option( 'cn_id_producto_personalizado_CortesLaser', $cn_id_producto_personalizado_CortesLaser );
    update_option( 'precio_chopo_3mm', $precio_chopo_3mm );
    update_option( 'precio_chopo_4mm', $precio_chopo_4mm );
    update_option( 'precio_chopo_5mm', $precio_chopo_5mm );
    update_option( 'precio_chopo_6mm', $precio_chopo_6mm );
    update_option( 'precio_chopo_8mm', $precio_chopo_8mm );
    update_option( 'precio_chopo_10mm', $precio_chopo_10mm );

    update_option( 'precio_mdf_25mm', $precio_mdf_25mm );
    update_option( 'precio_mdf_3mm', $precio_mdf_3mm );
    update_option( 'precio_mdf_4mm', $precio_mdf_4mm );
    update_option( 'precio_mdf_5mm', $precio_mdf_5mm );
    update_option( 'precio_mdf_7mm', $precio_mdf_7mm );

    update_option( 'precio_mukaly_2mm', $precio_mukaly_2mm );

    update_option( 'precio_metacrilato_2mm', $precio_metacrilato_2mm );
    update_option( 'precio_metacrilato_3mm', $precio_metacrilato_3mm );
    update_option( 'precio_metacrilato_4mm', $precio_metacrilato_4mm );
    update_option( 'precio_metacrilato_5mm', $precio_metacrilato_5mm );
    update_option( 'precio_metacrilato_6mm', $precio_metacrilato_6mm );
    update_option( 'precio_metacrilato_8mm', $precio_metacrilato_8mm );
    update_option( 'precio_metacrilato_10mm', $precio_metacrilato_10mm );    

    // Regresamos a la pagina de ajustes
    wp_redirect(

      add_query_arg (
        'page',
        'cn-conf-ga-cutlaser',
        admin_url( 'options-general.php' )
      )
    );
    exit;
}

add_action('wp_ajax_jnjtest', 'jnj_mi_funcion_CortesLaser');
add_action('wp_ajax_nopriv_jnjtest', 'jnj_mi_funcion_CortesLaser');

// Esta función tiene que devolver los resultados al frontend
// en el formato que queramos..
function jnj_mi_funcion_CortesLaser()
{

    $material = $_POST['material'];
    $grosor = $_POST['grosor'];
    $longitud = $_POST['longitud'];
    $precioGrosor = $_POST['precioGrosor'];
    $precioFinal = $_POST['precioFinal'];

    echo '<br>
        <label style="width:600px;height:60px; background-color: #004c80; color: #ffffff;  padding: 3% 0; border-radius: 14px;" >
           '.$longitud.' mm de corte lineal por '.$precioGrosor.' &euro; de '.strtoupper($material).' de '.$grosor.' = &euro; '.$precioFinal.'
        </label>
        <br>';

  wp_die();
}


//Aqui se muestra el formulario de personalización del rotulo de neon:
/**
 * Output engraving field.
 */
function iconic_output_engraving_field_CortesLaser() {

      global $product;

      $cn_id_producto_personalizado_CortesLaser = get_option( 'cn_id_producto_personalizado_CortesLaser' ) ;

      //echo $cn_id_producto_personalizado_CortesLaser; die();

      if ( $product->get_id() != $cn_id_producto_personalizado_CortesLaser ) {
        return;
      }

    // Conseguir el valor del Precio base de todos los elementos:
    $precio_chopo_3mm                           = get_option( 'precio_chopo_3mm' ) ;
    $precio_chopo_4mm                           = get_option( 'precio_chopo_4mm' ) ;
    $precio_chopo_5mm                           = get_option( 'precio_chopo_5mm' ) ;
    $precio_chopo_6mm                           = get_option( 'precio_chopo_6mm' ) ;
    $precio_chopo_8mm                           = get_option( 'precio_chopo_8mm' ) ;
    $precio_chopo_10mm                          = get_option( 'precio_chopo_10mm' ) ;

    $precio_mdf_25mm                            = get_option( 'precio_mdf_25mm' ) ;
    $precio_mdf_3mm                             = get_option( 'precio_mdf_3mm' ) ;
    $precio_mdf_4mm                             = get_option( 'precio_mdf_4mm' ) ;
    $precio_mdf_5mm                             = get_option( 'precio_mdf_5mm' ) ;
    $precio_mdf_7mm                             = get_option( 'precio_mdf_7mm' ) ;

    $precio_mukaly_2mm                          = get_option( 'precio_mukaly_2mm' ) ;

    $precio_metacrilato_2mm                     = get_option( 'precio_metacrilato_2mm' ) ;
    $precio_metacrilato_3mm                     = get_option( 'precio_metacrilato_3mm' ) ;
    $precio_metacrilato_4mm                     = get_option( 'precio_metacrilato_4mm' ) ;
    $precio_metacrilato_5mm                     = get_option( 'precio_metacrilato_5mm' ) ;
    $precio_metacrilato_6mm                     = get_option( 'precio_metacrilato_6mm' ) ;
    $precio_metacrilato_8mm                     = get_option( 'precio_metacrilato_8mm' ) ;
    $precio_metacrilato_10mm                    = get_option( 'precio_metacrilato_10mm' ) ;

    require('formularioCustomizer.php');

}

add_action( 'woocommerce_before_single_product', 'iconic_output_engraving_field_CortesLaser', 10 );

//woocommerce_single_product_summary
//woocommerce_before_single_product
//add_action( 'woocommerce_before_add_to_cart_button', 'iconic_output_engraving_field_CortesLaser', 10 );


//Aqui se muestran ocultos en el formulario del carrito los campos de personalización del rotulo de neon:
/**
 * Output engraving field.
 */
function campos_ocultos_CortesLaser() {

      global $product;

      $cn_id_producto_personalizado_CortesLaser = get_option( 'cn_id_producto_personalizado_CortesLaser' ) ;

      //echo $cn_id_producto_personalizado_CortesLaser; die();

      if ( $product->get_id() != $cn_id_producto_personalizado_CortesLaser ) {
        return;
      }

  ?>

  <div class="bsnamespace"> 

    <input type="text" id="precio_final" name="precio_final" value="567" readonly="yes">
    
    <input type="text" id="altura_final" name="altura_final" value="10" readonly="yes">
    <input type="text" id="ancho_final" name="ancho_final" value="20" readonly="yes">
    <input type="text" id="longitud_final" name="longitud_final" value="30" readonly="yes">
    <input type="text" id="materiales_final" name="materiales_final" value="chopo" readonly="yes">
    <input type="text" id="mmGrosor_final" name="mmGrosor_final" value="2mm" readonly="yes">

  </div>
  <?php

}

//add_action( 'woocommerce_before_single_product_summary', 'iconic_output_engraving_field_CortesLaser', 10 );
add_action( 'woocommerce_before_add_to_cart_button', 'campos_ocultos_CortesLaser', 10 );



/**
 * Add engraving text to cart item.
 *
 * @param array $cart_item_data
 * @param int   $product_id
 * @param int   $variation_id
 *
 * @return array
 */

function iconic_add_engraving_text_to_cart_item_CortesLaser( $cart_item_data, $product_id, $variation_id ) {

  $upload_dir=wp_upload_dir();
  $path=$upload_dir['basedir'].'/myuploads/';  //upload dir.
  if(!is_dir($path)) { mkdir($path); }

  $target_dir = $path;//"uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Check if image file is a actual image or fake image
  /*if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "No es un formato válido. <br/>";
      $uploadOk = 0;
    }
  }*/

  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Disculpe, el archivo ya existe. <br/>";
    $uploadOk = 0;
    return $cart_item_data;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Disculpe, el tamaño del archivo es muy grande. <br/>";
    $uploadOk = 0;
    return $cart_item_data;
  }

  // Allow certain file formats
  if($imageFileType != "dxf" && $imageFileType != "dwg" && $imageFileType != "ai" && $imageFileType != "pdf" && $imageFileType != "eps" && $imageFileType != "cdr" && $imageFileType != "zip"  ) {
    echo "Disculpe, solo los formatos DXF, DWG, AI, PDF, EPS, CDR y ZIP son permitidos. <br/>";
    $uploadOk = 0;
    return $cart_item_data;
  }

  /*if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Disculpe, solo los formatos JPG, JPEG, PNG & GIF son permitidos. <br/>";
    $uploadOk = 0;
  }*/

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Error, el archivo no se ha subido al servidor. <br/>";
    return $cart_item_data;
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      //echo "El archivo ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " se ha subido con éxito. <br/>";
    } else {
      echo "Disculpe, ha habido un error subiendo el archivo. <br/>";
      return $cart_item_data;
    }
  }

  /*
  $precio_final         = filter_input( INPUT_POST, 'precio_final' );
  $materiales           = filter_input( INPUT_POST, 'materiales_final' );
  $mmGrosor             = filter_input( INPUT_POST, 'mmGrosor_final' );
  $ancho                = filter_input( INPUT_POST, 'ancho_final' );
  $altura               = filter_input( INPUT_POST, 'altura_final' );
  $longitud             = filter_input( INPUT_POST, 'longitud_final' );
  */

  $precio_final         = filter_input( INPUT_POST, 'precio_final' );
  $materiales           = filter_input( INPUT_POST, 'materiales' );
  $mmGrosor             = filter_input( INPUT_POST, 'mmGrosor' );
  $ancho                = filter_input( INPUT_POST, 'ancho' );
  $altura               = filter_input( INPUT_POST, 'altura' );
  $longitud             = filter_input( INPUT_POST, 'longitud' );  
  $comentario           = filter_input( INPUT_POST, 'comentario' );  

  if ( empty( $precio_final )) {
    return $cart_item_data;
  }

  $product = wc_get_product( $product_id );
  $price = $product->get_price();
  // extra pack checkbox

  //$cart_item_data['new_price'] = $price + $precio_final;        
  $cart_item_data['new_price']    = $precio_final;       
  $cart_item_data['materiales']   = $materiales;
  $cart_item_data['mmGrosor']     = $mmGrosor;
  $cart_item_data['ancho']        = $ancho;
  $cart_item_data['altura']       = $altura;
  $cart_item_data['longitud']     = $longitud;
  $cart_item_data['comentario']   = $comentario;

  return $cart_item_data;
}

add_filter( 'woocommerce_add_cart_item_data', 'iconic_add_engraving_text_to_cart_item_CortesLaser', 10, 3 );




/**
 * Display engraving text in the cart.
 *
 * @param array $item_data
 * @param array $cart_item
 *
 * @return array
 */
function iconic_display_engraving_text_cart_CortesLaser( $item_data, $cart_item ) {
  if ( empty( $cart_item['materiales'] ) ) {
    return $item_data;
  }

  $item_data[] = array(
    'key'     => __( 'Material', 'iconic' ),
    'value'   => wc_clean( $cart_item['materiales'] ),
    'display' => '',
  ); 

  $item_data[] = array(
    'key'     => __( 'Grosor', 'iconic' ),
    'value'   => wc_clean( $cart_item['mmGrosor'] ),
    'display' => '',
  );   

  $item_data[] = array(
    'key'     => __( 'Altura (mm)', 'iconic' ),
    'value'   => wc_clean( $cart_item['altura'] ),
    'display' => '',
  );

  $item_data[] = array(
    'key'     => __( 'Anchura (mm)', 'iconic' ),
    'value'   => wc_clean( $cart_item['ancho'] ),
    'display' => '',
  );

  $item_data[] = array(
    'key'     => __( 'Longitud', 'iconic' ),
    'value'   => wc_clean( $cart_item['longitud'] ),
    'display' => '',
  );

  $item_data[] = array(
    'key'     => __( 'Comentario', 'iconic' ),
    'value'   => wc_clean( $cart_item['comentario'] ),
    'display' => '',
  );   

  return $item_data;
}

add_filter( 'woocommerce_get_item_data', 'iconic_display_engraving_text_cart_CortesLaser', 10, 2 );


add_action( 'woocommerce_before_calculate_totals_CortesLaser', 'before_calculate_totals_CortesLaser', 10, 1 );
 
function before_calculate_totals_CortesLaser( $cart_obj ) {

  if ( is_admin() && ! defined( 'DOING_AJAX' ) ) {
    return;
  }

  // Iterate through each cart item
  foreach( $cart_obj->get_cart() as $key=>$value ) {

    if( isset( $value['new_price'] ) ) {
      $price = $value['new_price'];
      $value['data']->set_price( ( $price ) );
    }
  }
}