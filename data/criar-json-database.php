<?php
    include 'Database.php';
    include '../domain/Jaguar.php';
    include '../data/MockData.php';

    $jaguars = MockData::retrieveJaguarList();
    //echo json_encode($jaguars, true);
    Database::saveDatabase( 'jaguars.json', $jaguars );

