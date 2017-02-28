<?php

include '../data/Database.php';

class AplAdmin
{
    public static function getJaguarsJson(){
        $objetos = Database::getDados( '../data/jaguars.json' );
        return json_encode( $objetos );
    }
}