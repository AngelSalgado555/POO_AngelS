<?php


session_start();

//Veo si he llegado a través del botón submit es decir, petición POST
$name = $surname = $dni = $password = $password2 = $email = $conect = "";
$carnet = false;
$passError = $nameError = $emailError = "";
$errors = false; 
$errorDB = ""; 

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    //1. Recoger Datos: 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/secure.php";
    $name = secure($_POST["name"]);
    $surname = secure($_POST["surname"]);
    $dni = secure($_POST["dni"]);
    $carnet = (bool) $_POST["carnet"];
    $password = secure($_POST["password"]);
    $password2 = secure($_POST["confirm-password"]);
    $email = secure($_POST["email"]);

    if (isset($_POST["stay-connected"])){
        $conect = $_POST["stay-connected"];
    }

    //2. Verificar
    if (empty($name)){
        $errors = true;
        $nameError = "Este campo es obligatorio ";
    }

    if (empty($surname)){
        $errors = true;
        $nameError = "Este campo es obligatorio ";
    }

    if (empty($email)){
        $errors = true;
        $emailError = "Este campo es obligatorio ";
    }

    if (empty($password) or $password != $password2){
        $errors = true;
        $passError = "Las contraseñas no coinciden";
    }


    //3. Si todo va bien, me voy al index (sesión)
    //Y lo meto en la base de datos
    if (!$errors){
        $_SESSION["name"] = $name;
        $_SESSION["surname"] = $surname;
        $_SESSION["dni"] = $dni;
        $_SESSION["carnet"] = $carnet;
        //Las contraseñas no las pasamos
        $_SESSION["email"] = $email;
        // header("Location: index.php");

        //Lo guardo en la DB
        require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repositories/UserDAO.php";
        $u = new Users($name, $surname, $dni, $carnet, $password, $email);
        if (UserDAO::create($u)){
            //Aquí lo que queremos que pase cuando no haya error
            echo "Creado :)";
            exit();
        } else{
            //Aquí lo que quieras que pase cuando hay un error 
            $errorDB = "No creado, pipipi :,(";
        }
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> RentoGo </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        /* .container{
            height: 100vh;
        } */
    </style>
</head>
<body>
    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/views/layouts/header.php";
    ?>

    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/views/components/signup.php";
    ?>

    <?php
        require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/views/layouts/footer.php";
    ?>
</body>
</html>