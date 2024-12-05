<?php 
/**
 * Plugin Name: oneField
 * Description: Um plugin teste para fins de estudo.
 * Version: 1.0
 * Author: marcocapote
 */

 if (!defined('ABSPATH')) exit;

require_once __DIR__ . '/models/table.php';
require_once __DIR__ . '/models/menu.php';

register_activation_hook( __FILE__, 'create_table_oneField' );

register_activation_hook( __FILE__, 'criar_menu' );

register_activation_hook( __FILE__, 'criar_submenu' );


register_uninstall_hook( __FILE__, 'drop_table_oneField' );
