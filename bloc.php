<?php

function guardarOpcion()
{
    if ($_POST) {
        switch ($_POST["anime"]) {
            case 'naruto':
                $resultadoAnime = "checked";
                break;
            case 'bleach':
                $resultadoAnime = "checked";
                break;
            case 'death note':
                $resultadoAnime = "checked";
                break;
            default:
                break;
        }
        return $resultadoAnime;
    }
}

?>

<form action="bloc.php" method="POST">
    <?php if ($_POST) { ?>
        <p>Nombre : <strong><?php echo ($_POST) ? $_POST["nombre"] : ""; ?></strong></p>
    <?php } ?>
    <input type="text" name="nombre" id="" value=<?php echo ($_POST) ? $_POST["nombre"] : ""; ?>>
    <br>
    <p>Tu anime favorito es : </p>
    <input type="radio" name="anime" id="" value="" <?php ?>>
    <label>Ninguna opción</label>
    <input type="radio" name="anime" id="" value="naruto" <?php if ($_POST) {
                                                                echo ($_POST["anime"] == "naruto") ? "checked" : "";
                                                            } ?>>
    <label>Naruto</label>
    <input type="radio" name="anime" id="" value="bleach" <?php if ($_POST) {
                                                                echo ($_POST["anime"] == "bleach") ? "checked" : "";
                                                            } ?>>
    <label>Bleach</label>
    <input type="radio" name="anime" id="" value="death note" <?php if ($_POST) {
                                                                    echo ($_POST["anime"] == "death note") ? "checked" : "";
                                                                } ?>>
    <label>Death Note</label>
    <br><br>
    <input type="submit" value="Enviar información">
</form>

<br>
<?php if ($_POST) {
    print_r($_POST);
    echo "Tu anime favorito es : " . $_POST["anime"];
}
?>