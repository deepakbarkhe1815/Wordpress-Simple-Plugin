<?php 
/*
Plugin Name: Form Data
Plugin URI: http://www.hornax.com 
Author: Deepak Barkhe
Author URI: http://www.hornax.com/deepakbarkhe
Description: Simple Plugin Development
Version: 1.0.1


*/

if ( !defined( 'ABSPATH' ) ) {
    exit();
}

register_activation_hook(__FILE__, 'form_data_activate');
register_deactivation_hook(__FILE__, 'form_data_deactivate');

function form_data_activate(){
    global $wpdb;
    global $table_prefix;
    $table = $wpdb->prifix . 'form_data';
    $charset_collate = $wpdb->get_charset_collate();

    $sql="CREATE TABLE $table (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) $charset_collate" ;
       
       require_once ABSPATH . 'wp-admin/includes/upgrade.php';
        dbDelta( $sql );
       
       
    //    $wpdb->query($sql);
// print_r()
}

function form_data_deactivate(){
    // global $wpdb;
    // global $table_prefix;
    // $table= $table_prefix . 'form_data';
    // $sql="DROP TABLE IF EXISTS $table"; 
    // $wpdb->query($sql);
}


?>

