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
require_once __DIR__ . '/controllers/oneFieldController.php';

// Registro de tabelas
register_activation_hook(__FILE__, 'create_table_oneField');
register_uninstall_hook(__FILE__, 'drop_table_oneField');

// Registro de menus
add_action('admin_menu', 'criar_menu');
add_action('admin_menu', 'criar_submenu');