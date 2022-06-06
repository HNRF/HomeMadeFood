<?php
$host="127.0.0.1";
$user="root";
$clave="";
$basedatos="homemade_food";

$conex=mysqli_connect($host,$user,$clave);

if(mysqli_connect_errno()){
    echo "Ha ocurrido un error en la conexion con la base de datos.<br>";
    exit();
}

mysqli_select_db($conex,$basedatos) or die ("Base de datos incorrecta.<br>");

mysqli_set_charset($conex,"UTF8");

//echo "Todo ha salido de manera correcta.";

?>