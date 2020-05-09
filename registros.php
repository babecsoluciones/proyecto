<?php
require("./cnx/conexion.php");

$insert = "INSERT INTO ...";
$rs = mysql_query($insert);

if(!$rs)
{
    print '<script>alert("Error");<script>';
}
else
{
    print '<script>alert("Guardado");<script>';
}
?>