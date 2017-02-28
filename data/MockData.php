<?php

class MockData
{
    public static function retrieveJaguar( $index ){
        $images = [
            "http://autopolis.com.br/wp-content/uploads/2015/08/Jaguar-XE_012.jpg",
            "http://froog.com.br/wp-content/uploads/2009/07/jaguar-xf-2010.jpg",
            "http://cloudlakes.com/data_images/models/jaguar-xj/jaguar-xj-08.jpg",
            "http://carroslancamentos.com.br/wp-content/uploads/2016/01/preco-jaguar-f-pace-e1452189923210.jpg",
            "http://s2.glbimg.com/kP95p9PvAa0AGd9jFR3lO_FOSQM=/620x400/e.glbimg.com/og/ed/f/original/2014/04/07/01-salsa-s.jpg",
            "http://autoguide.com.vsassets.com/blog/wp-content/gallery/jaguar-i-pace-concept/2018-Jaguar-I-Pace-Concept-01-1.jpg"
        ];
        $models = [
            "XE",
            "XF",
            "XJ",
            "F-PACE",
            "F-TYPE",
            "I-PACE CONCEPT"
        ];
        $prices = [
            "R$ 147.650,00",
            "R$ 325.603,00",
            "R$ 554.310,00",
            "R$ 309.300,00",
            "R$ 687.700,00",
            "Consulte um de nossos vendendores"
        ];
        $engines = [
            "2.0L Turbocharged",
            "3.0 litros V6",
            "3.0 litros V6 Supercharged",
            "V6 de 3.0 litros Supercharged",
            "V8 supercharged",
            "Eletric"
        ];

        $j = new Jaguar();

        $j->setModelo( $models[$index] );
        $j->setMotor( $engines[$index] );
        $j->setUrlImagem( $images[$index] );
        $j->setPreco( $prices[$index] );

        return $j;
    }

    public static function retrieveJaguarList(){
        $jaguars = [];
        $jaguars[] = self::retrieveJaguar(0);
        $jaguars[] = self::retrieveJaguar(1);
        $jaguars[] = self::retrieveJaguar(2);
        $jaguars[] = self::retrieveJaguar(3);
        $jaguars[] = self::retrieveJaguar(4);
        $jaguars[] = self::retrieveJaguar(5);

        return $jaguars;
    }
}