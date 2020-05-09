<?php
require("./cnx/conexion.php");

$usuario = "'".$_POST['email']."'";
$password = "'".$_POST['password']."'";

$select = "SELECT * FROM usuarios WHERE email = $usuario AND password = $password";
$rsUsuario = mysql_query($select);
$usuario = mysql_fetch_array($rsUsuario);

if(mysql_num_rows($rsUsuario))
{
    print '<script>window.location="registros.html";</script>';
}
else
{
    print '<script>alert("Credenciales erroneas"); window.location="index.html";</script>';
}
?>