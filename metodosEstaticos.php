<?php

class UnaClase
{
    public static function unMetodo()
    {
        echo "Hola soy un metodo estatico";
    }
}

$obj = new UnaClase();
$obj->unMetodo();

// Es otra forma de invocar al metodo siempre y cuando sea de tipo static, solo es un paso
UnaClase::unMetodo();
