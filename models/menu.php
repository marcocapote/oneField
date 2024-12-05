<?php

function criar_menu()
{
    //Menu Principal
    add_menu_page(
        'oneField',
        'oneField',
        'manage_options',
        'oneField_principal',
        'renderizar_pagina'
    );
}
function criar_submenu()
{
    add_submenu_page(
        'oneField_principal',
        'pagina principal',
        'principal',
        'manage_options',
        'oneField_submenu',
        'renderizar_submenu'
    );
}
function renderizar_pagina()
{
    // Caminho absoluto para o arquivo menu.php
    $path = plugin_dir_path(__DIR__) . 'views/menu.php';
    if (file_exists($path)) {
        include $path;
    } else {
        echo '<div class="error">Arquivo de menu não encontrado.</div>';
    }
}

function renderizar_submenu(){
     // Caminho absoluto para o arquivo submenu.php
     $path = plugin_dir_path(__DIR__) . 'views/submenu.php';
     if (file_exists($path)) {
         include $path;
     } else {
         echo '<div class="error">Arquivo de submenu não encontrado.</div>';
     }
}