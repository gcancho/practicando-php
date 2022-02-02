<?php

class Estudiante
{
    public $nombre;
    public $edad;
    public $constante = 15;

    public function cambiarDatos($nuevoNombre, $nuevaEdad)
    {
        $this->nombre = $nuevoNombre;
        $this->edad = $nuevaEdad;
    }

    public function aumentarEdad()
    {
        $this->edad = $this->edad + $this->constante;
    }

    public function imprimirEstudiante()
    {
        echo "El estudiante " . $this->nombre . " tiene : " . $this->edad . " años";
    }

    public static function despedirse()
    {
        echo "Adios ";
    }
}

$obj = new Estudiante();
$obj->cambiarDatos("giovanni", 15);
$obj->aumentarEdad();
$obj->imprimirEstudiante();

Estudiante::despedirse();
