<?php
$dbHost = "localhost";
$dbUser = "usuario";
$dbPass = "password";
$dbName = "base";

$conexion = mysql_connect($dbHost,$dbUser,$dbPass);
mysql_select_db($dbName);
?>