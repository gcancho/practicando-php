<?php

// Usar clases ayuda en la organizacion del codigo
class persona
{
    // propiedades
    public $nombre;
    // private solo puede ser accedida dentro de la clase
    private $edad;
    protected $altura;

    public function asignarNombre($nuevoNombre) // accion o metodo
    {
        // Referencia al nombre de arriba
        $this->nombre = $nuevoNombre;
    }

    public function cambiarNombre($nombreACambiar = "anonimo")
    {
        $this->nombre = $nombreACambiar;
    }

    public function mostrarEdad()
    {
        $this->edad = 30;
        // estamos retornando edad para que pueda ser accedida fuera de la clase invocando al metodo mostrarEdad()
        return $this->edad;
    }
}

class trabajador extends persona
{
    public $puesto;

    public function presentarse()
    {
        echo "Hola soy " . $this->nombre . " y trabajo como " . $this->puesto;
    }
}

function espaciado()
{
    echo "<br/>";
}

// instancia o creacion de un objeto
$objAlumno = new persona();
// llamando a metodo
$objAlumno->asignarNombre("giovanni");
$objAlumno->cambiarNombre("carlos");

echo $objAlumno->nombre;
echo $objAlumno->mostrarEdad();

espaciado();

$objTrabajador = new trabajador();
$objTrabajador->asignarNombre("hector");
$objTrabajador->puesto = "Profe";
$objTrabajador->presentarse();
