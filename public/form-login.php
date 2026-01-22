<?php
session_start();

$email = $pass = ""; 
$emailError = $passError = ""; 
$errors = false; 
$errorDB = ""; 

if (isset($_COOKIE["stay-connected"])){
    $_SESSION["correo-login"] = $_COOKIE["stay-connected"];
    $_SESSION["origin"] = "login";
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    //1. Recoger Datos: 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/secure.php";
    $email = secure($_POST["correo-login"]);
    $pass = secure($_POST["pass-login"]);

    //2. Verificar
    if (empty($email)){
        $errors = true;
        $emailError = "Introduce el correo por favor ";
    }

    if (empty($pass)){
        $errors = true;
        $passError = "Introduce la contraseña por favor ";
    }

    //Falta ver si la contraseña y el email son correctos 

    //3. Si todo va bien, me voy al index (sesión)
    if (!$errors){
        //Hago la cookie para seguir logueado
        if (isset($_POST["stay-connected"])){
            setcookie("stay-connected", $email, time() + 60*60, "/");
        }

        unset($_SESSION["error"]);
        $_SESSION["correo-login"] = $email;
        $_SESSION["origin"] = "login";
        header("Location: index.php");
    }

}

            //Aquí lo que queremos que pase cuando no haya error


            //Aquí lo que quieras que pase cuando hay un error 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Formulario de Login </title>
    <link rel="stylesheet" href="css/styel.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/views/layouts/header.php";  ?>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/views/components/login.php";  ?>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/views/layouts/footer.php";  ?>
</body>
</html>