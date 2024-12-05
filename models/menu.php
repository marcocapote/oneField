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
    include 'views/menu.php';
}

function renderizar_submenu(){
    include 'views/submenu.php';
}