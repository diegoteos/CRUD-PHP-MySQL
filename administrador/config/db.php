<?php

$host = "localhost";
$db = "crud";
//$db = "expertajes";
$usuario = "root";
$contraseña = "Guatemala2022.";


try {

    $conexion = new PDO("mysql:host=$host; dbname=$db", $usuario, $contraseña);
} catch (Exception $ex) {

    echo $ex->getMessage();
} 
/*
$serv = "localhost";
$us = "root";
$con = "Guatemala2022.";
$db = "crud";

$conexion = new mysqli($serv, $us, $con, $db);

if($conexion->connect_error && $conexion->connect_errno){
    echo 'Error en la conexion: '.$conexion->connect_errno;	
    echo 'Error en la conexion: '.$conexion->connect_error;	
}
*/