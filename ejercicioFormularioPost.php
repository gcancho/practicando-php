<?php

$resultado = "";
$rbg = "";

$chkPhp = "";
$chkJava = "";
$chkC = "";

$lsAnime = "";

if ($_POST) {
    // If ternario, isset: si viene con algo
    $resultado = (isset($_POST["nombre"])) ? $_POST["nombre"] : "";
    $rbg = (isset($_POST["lenguaje"])) ? $_POST["lenguaje"] : "";

    $chkPhp = (isset($_POST["chkPhp"]) == "si") ? "checked" : "";
    $chkJava = (isset($_POST["chkJava"]) == "si") ? "checked" : "";
    $chkC = (isset($_POST["chkC"]) == "si") ? "checked" : "";

    $lsAnime = (isset($_POST["lsAnime"])) ? $_POST["lsAnime"] : "";

    $mensajeArea = (isset($_POST["txtMensaje"])) ? $_POST["txtMensaje"] : "";
    // print_r($_POST);
}

?>

<!-- Si esque hay un envio -->
<!-- Codigo embebido -->
<?php if ($_POST) { ?>
    <h2>Hola <?php echo $resultado; ?> </h2>
    <h3>Tu lenguaje favorito es : <?php echo $rbg; ?> </h3>
    <h3>Tu anime favorito es : <?php echo $lsAnime ?></h3>
    <h3>Tu mensaje es : <?php echo $mensajeArea; ?></h3>
<?php } ?>


<form action="ejercicioFormularioPost.php" method="post">
    <label for="">Nombre</label><br>
    <input type="text" name="nombre" value="<?php echo $resultado; ?> ">
    <label for="">Edad</label>
    <input type="text" name="edad">

    <!-- radios -->
    <p>Que lenguaje te gusta ?</p>
    <label>Php</label><input type="radio" <?php echo ($rbg == "php") ? "checked" : ""; ?> name="lenguaje" value="php" id="">
    <label>Java</label><input type="radio" <?php echo ($rbg == "java") ? "checked" : ""; ?> name="lenguaje" value="java" id="">
    <label>C</label><input type="radio" <?php echo ($rbg == "c") ? "checked" : ""; ?> name="lenguaje" value="c" id="">

    <!-- checkboxs -->
    <p>Estas aprendiendo...</p>
    <ul>
        <li> <?php echo ($chkPhp == "checked") ? "php" : ""; ?></li>
        <li> <?php echo ($chkJava == "checked") ? "Java" : ""; ?></li>
        <li> <?php echo ($chkC == "checked") ? "C" : ""; ?></li>
    </ul>
    <br>
    <label>Php</label><input type="checkbox" <?php echo $chkPhp; ?> name="chkPhp" value="si" id="">
    <label>Java</label><input type="checkbox" <?php echo $chkJava; ?> name="chkJava" value="si" id="">
    <label>C</label><input type="checkbox" <?php echo $chkC; ?> name="chkC" value="si" id="">

    <!-- select -->
    <p>Que anime te gusta ?</p>
    <select name="lsAnime" id="">
        <option value="">[Ningun anime]</option>
        <option value="naruto" <?php echo ($lsAnime == "naruto") ? "selected" : ""; ?>>Naruto</option>
        <option value="bleach" <?php echo ($lsAnime == "bleach") ? "selected" : ""; ?>>Bleach</option>
        <option value="dragon" <?php echo ($lsAnime == "dragon") ? "selected" : ""; ?>>Dragon Ball</option>
    </select>

    <!-- textarea -->
    <p>Mensaje :</p>
    <textarea name="txtMensaje" id="" cols="30" rows="10">
        <?php echo $mensajeArea; ?>
    </textarea>
    <br><br>
    <input type="submit" name="submit" value="Enviar resultado">
</form>