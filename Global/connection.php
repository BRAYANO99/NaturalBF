<?php
    //Conexion normal
    $conexion_normal = new mysqli("localhost", "root", "", "NaturalBF_BD");
    if ($conexion_normal->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }else{
        echo "Conexion hecha";
    }
    $conexion_normal->set_charset("utf8");
?> 