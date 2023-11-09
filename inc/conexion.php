<?php
$usuario = 'root';
$clave='';
$servidor='localhost';
$basededatos='argento'; 

$conexion = mysqli_connect($servidor,$usuario,$clave) or die ('No se pudo conectar al servidor');

$db = mysqli_select_db($conexion,$basededatos) or die ('no se conecto a la base de datos');
?>