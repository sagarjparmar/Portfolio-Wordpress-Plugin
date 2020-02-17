<?php
/*
    Plugin Name: SP Portfolio
    Plugin URI: logixbuilt.com
    Description: Portfolio for logixbuilt
    Version:1.0
    Author:Sagar parmar
    Author URI:logixbuilt.com
*/
global $wpdb;
define('P_PLUGIN_URI',plugin_dir_url(__FILE__));
define('P_CRUD_PLUGIN_PATH',plugin_dir_path(__FILE__));

register_activation_hook(__FILE__,"register_activate_sp_portfolio_plugin_function");
register_deactivation_hook(__FILE__,'register_deactivate_sp_portfolio_plugin_function');

/* Function for activate and create database table for plugin */
function register_activate_sp_portfolio_plugin_function(){
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name_portfolio = $wpdb->prefix."sp_portfolio";
    $table_name_media = $wpdb->prefix."sp_media";
    $sql_portfolio_table = "CREATE TABLE $table_name_portfolio ( `id` INT NOT NULL ,
     `title` VARCHAR(256) NOT NULL ,
      `subtitle` VARCHAR(256) NOT NULL ,
       `description` TEXT NOT NULL ,
        `thumbnail` VARCHAR(256) NOT NULL ,
         `createdat` DATETIME NOT NULL ,
          `updatedat` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
           PRIMARY KEY (`id`)) ENGINE = InnoDB;";

    $sql_portfolio_media = "CREATE TABLE $table_name_media ( 
        `id` INT NOT NULL ,
            `media_url` VARCHAR(256) NOT NULL ,
                `index_id` INT NOT NULL ,
                    `portfolio_id` INT NOT NULL ,
                        PRIMARY KEY (`id`)) ENGINE = InnoDB;";

    require_once(ABSPATH.'wp-admin/includes/upgrade.php');
    dbDelta($sql_portfolio_table);
    dbDelta($sql_portfolio_media);
}

/* Function for deactivate and delete database table for plugin */
function register_deactivate_sp_portfolio_plugin_function(){
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix."sp_portfolio";
    $sql_portfolio="DROP TABLE IF EXISTS $table_name";
    $table_name_media = $wpdb->prefix."sp_media";
    $sql_media = "DROP TABLE IF EXISTS $table_name_media";
    $wpdb->query($sql_portfolio);
    $wpdb->query($sql_media);
}

add_action('admin_menu','my_menu_page');
function my_menu_page(){
    add_menu_page("SP Portfolio","SP Portfolio","manage_options","view_portfolios","show_portfolios","dashicons-grid-view",81);
    add_submenu_page('view_portfolios',"View Portfolio's","View Portfolio's",'manage_options','view_portfolios','show_portfolios');
    add_submenu_page('view_portfolios',"Add New Portfolio","Add New Portfolio",'manage_options','add_new_portfolio','add_portfolio');
}
function show_portfolios(){
    //echo "Hello Portfolios";
    ob_start();
    include_once plugin_dir_path(__FILE__).'/operations/add_new_portfolio.php';
    $template = ob_get_contents();
    ob_end_clean();
    echo $template;
}
function add_portfolio(){
    echo "add New portfolio";
}
?>