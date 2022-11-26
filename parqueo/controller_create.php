<?php
/**
 * Created by PhpStorm.
 * User: HILARIWEB
 * Date: 13/9/2022
 * Time: 09:55
 */

include('../app/config.php');

$nro_vehiculos = $_GET['nro_vehiculos'];
$estado_ruta = $_GET['estado_ruta'];
$obs = $_GET['obs'];

//echo $nro_espacio."-".$estado_espacio."-".$obs;

date_default_timezone_set("America/caracas");
$fechaHora = date("Y-m-d h:i:s");

$sentencia = $pdo->prepare("INSERT INTO tb_mapeos 
        (nro_vehiculos, estado_ruta, obs, fyh_creacion, estado) 
VALUES (:nro_vehiculos,:estado_ruta,:obs,:fyh_creacion,:estado)");

$sentencia->bindParam('nro_vehiculos',$nro_vehiculos);
$sentencia->bindParam('estado_ruta',$estado_ruta);
$sentencia->bindParam('obs',$obs);
$sentencia->bindParam('fyh_creacion',$fechaHora);
$sentencia->bindParam('estado',$estado_del_registro);

if($sentencia->execute()){
    echo "registro satisfactorio";
    //header('index.php');
    ?>
    <script>location.href = "mapeo-de-vehiculos.php";</script>
    <?php
}else{
    echo "no se pudo registrar a la base de datos";
}
