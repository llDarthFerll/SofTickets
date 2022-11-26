<?php

define ('SERVIDOR','localhost');
define ('USUARIO','root');
define ('PASSWORD','');
define ('BD','bdsoftickets');

$servidor="mysql:dbname=".BD.";host=".SERVIDOR;

try{
    $pdo = new PDO($servidor,USUARIO,PASSWORD,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo "La conexion a la base de datos fue exitosa";
}catch(PDOException $e){
    //echo "Error al conectar a la base de datos";
    echo "<script>alert('Error al conectar a la base de datos');</script>";
}

$URL = "http://localhost/www.SofTickets.com";

$estado_del_registro="1";

?>