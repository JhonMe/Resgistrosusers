<?php
session_start();

// Destruye la sesión y redirige al formulario de inicio de sesión
session_destroy();
header("Location: loguin.php");
exit();
?>