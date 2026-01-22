<?php
//Cerrar sesión y redirigir a form-login
session_start();
session_destroy();
header("Location: form-login.php");

//Borrar las cookies
setcookie("stay-connected", "", time()-3600, "/"); 