<?php 
include 'conexion.php';

$consulta="INSERT INTO webmenu (Descripcion, Link, Estado) values('Inicio','/index.php','1')";
$result= $con->query($consulta);
if($result){
    echo 'Succes';
}


//UPDATE `webmenu` SET `Link` = '/index.php' WHERE `webmenu`.`IdWebMenu` = 1;
//INSERT INTO webmenu (Descripcion, Link, Estado) values('Inicio','/index.php','1')

