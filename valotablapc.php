<?php

$servidor = "localhost";
$usuario = "ctwtvsxj_admin";
$clave  = "ElMejorProgramador***";
$nombrebase = "ctwtvsxj_baseKonecta";


$conexion =mysql_connect($servidor,$usuario,$clave);
$la_base =mysql_select_db($nombrebase,$conexion);


$sql = "select * from codigos";
$consulta = mysql_query($sql,$conexion);
while($resul = mysql_fetch_assoc($consulta))
{
    echo $result;
}
die();

?>
