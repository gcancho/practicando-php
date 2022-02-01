<?php

if ($_POST) {

    $btnBoton = $_POST["btnBoton"];

    switch ($btnBoton) {
        case 'a':
            echo "Presiono el boton con el valor a";
            break;
        case 'b':
            echo "Presiono el boton con el valor b";
            break;
        case 'c':
            echo "Presiono el boton con el valor c";
            break;
        case 'd':
            echo "Presiono el boton con el valor d";
            break;
        default:
            echo "ga";
            break;
    }
}

echo "<pre>";
echo var_dump($_POST);
echo "</pre>";

// Constante
// define("ALTURA", 1.89);
// echo ALTURA;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="ejercicio.php" method="post">
        <input type="submit" name="btnBoton" value="a">
        <input type="submit" name="btnBoton" value="b">
        <input type="submit" name="btnBoton" value="c">
        <input type="submit" name="btnBoton" value="d">
    </form>
</body>

</html>