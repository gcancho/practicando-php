<?php

function imprimirNombre($nombre, $edad)
{
    echo "hola " . $nombre . " tienes " . $edad . "</br>";
}

function beErre()
{
    echo "</br>";
}

imprimirNombre("giovanni", 48);
imprimirNombre("oscar", 25);

$numeroAleatorio = rand(1, 8);

echo $numeroAleatorio;

$apellido = "</br>Cancho";
$nomMayu = strtoupper($apellido);

echo $nomMayu;

echo "</br>";

$hoy = date("d / m / y / r");
echo $hoy;

beErre();

function imprimir($nom, $ape = "")
{
    echo "Hola " . $nom . " " . $ape;
}

imprimir("gio");
