<?php

session_start();

// Puedo acceder a esta variable creada en sesiones.php ya que la sesion esta iniciada tambien aqui
// Cuando se cierra el navegador esta sesion desaparece
echo $_SESSION["estado"];
