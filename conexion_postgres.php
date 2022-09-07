<?php
//declarar variables de la conexion
$servidor = "localhost";
$db = "bd_prueba";
$user = "postgres";
$password = "27561321";

$conexion=pg_connect("host=$servidor user=$user password=$password dbname=$db"); //or die('error al conectar la base de datos');
//return $conexion;

if($conexion)
{
    echo "se conecto correctamente";
}
else{
    echo "ha ocurrido un problema";
}

?>