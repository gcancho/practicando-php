<?php

// 
session_start();

$_SESSION["usuario"] = "developer";
$_SESSION["estado"] = "logueado";

echo "Sesion iniciada" . "<br/>";
echo "Usuario : " . $_SESSION["usuario"] . " Estado : " . $_SESSION["estado"];
