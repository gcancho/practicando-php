<?php
//El simbolo -> en php esta asociado a notación de programación orientado a objetos. Por lo regular significa que accederas a una propiedad o un procedimiento que se genero al crear una instancia de un objeto en php.
//Por ejemplo si tienes una clase en php llamada triangulo, el cual tiene las propiedades base, altura y el método area; despues de crear una instancia de esta clase con el nombre miTriangulo, para acceder a las propiedades escribirias: $miTriangulo->base = 5; en este caso estas asignando el valor 5 a la propiedad base del objecto. Y para llamar al metodo área en este mismo ejemplo harias: $miTriangulo->area();
//Te recomiendo que veas informacion sobre objetos y clases en PHP.

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

// instancia o creacion de un objeto
$objAlumno = new persona();
// llamando a metodo
$objAlumno->asignarNombre("giovanni");
$objAlumno->cambiarNombre("carlos");

echo $objAlumno->nombre;
echo $objAlumno->mostrarEdad();
