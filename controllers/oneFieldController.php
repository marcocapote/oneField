<?php 
class OneFieldController{
    public static function listar(){
        global $wpdb;
        $tabela = $wpdb->prefix . 'onefield';
        
        $query = "
        SELECT field FROM $tabela
        ";

        return $wpdb->get_results($query);
    }

    public static function inserir($valor){
        global $wpdb;
        $tabela = $wpdb->prefix . 'onefield';

        $wpdb->insert($tabela, [
            'field' => $valor['field']
        ]);
    }
}