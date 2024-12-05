<?php
function create_table_oneField(){
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $nome_tabela = $wpdb->prefix . 'oneField';

    $sql= "CREATE TABLE $nome_tabela (
        field INT NOT NULL
    ) $charset_collate;
    ";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

}



function drop_table_oneField(){
    global $wpdb;
    $nome_tabela = $wpdb->prefix . 'oneField';

    $wpdb->query("DROP TABLE IF EXISTS $nome_tabela");

}