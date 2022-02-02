<?php

class humano
{
    public $nombre;
    private $edad;
    protected $altura;

    // Constructor : Metodo que permite crear el objeto a partir de un dato inicial
    function __construct($nuevoNombre)
    {
        $this->nombre = $nuevoNombre;
    }

    public function asignarNombre($nuevoNombre) // accion o metodo
    {
        $this->nombre = $nuevoNombre;
    }

    public function imprimirNombre()
    {
        echo "Hola soy " . $this->nombre;
    }

    public function mostrarEdad()
    {
        $this->edad = 30;
        return $this->edad;
    }
}

// Se asigna directamente en los parentesis porque existe un constructor
$objAlumno = new humano("Giovanni");
// $objAlumno->asignarNombre("giovanni");
$objAlumno->imprimirNombre();
