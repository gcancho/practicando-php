<?php

function beErre()
{
    echo "</br>";
}

//Arreglos normales
$frutas = array("fresa", "pera", "manzana");
print_r($frutas);

beErre();

//Arreglos asociativos
$frutasConIndices = array("f" => "fresa", "p" => "pera", "m" => "manzana");
print_r($frutasConIndices["f"]);

beErre();
?>

<ul>
    <?php
    for ($i = 0; $i < 3; $i++) {
        echo "<li class='hola'>" . $frutas[$i] . "</li>";
    }
    ?>
</ul>

<?php

$meses = array("enero", "febrero", "marzo");
//Funcion push
array_push($meses, "setiembre");

beErre();
print_r($meses);
