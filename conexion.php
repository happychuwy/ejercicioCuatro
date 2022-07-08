<?php

    $usuario="root";
    $pass="";
    $servidor="localhost:3307";//SERVIDOR MARIADB
    $bd="ejerciciocuatro";

    $conexion=mysqli_connect($servidor,$usuario,$pass,$bd);
    mysqli_set_charset($conexion, "utf8");

?>