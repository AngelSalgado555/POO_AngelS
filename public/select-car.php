<?php
session_start();

$name = $drive = $fuel = "";
$nameError = $driveError = $fuelError = "";
$errors = false;

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    //1. Recoger datos 
    include $_SERVER['DOCUMENT_ROOT'] . "/utils/secure.php";
    $name = secure($_POST["name"]);

    if (isset($_POST["drive"])){
        $drive = $_POST["drive"];
    } else {
        $errors = true;
        $driveError = "Selecciona un tipo de conducción por favor";
    }

    if (isset($_POST["fuel"])){
        $fuel = $_POST["fuel"];
    } else {
        $errors = true;
        $fuelError = "Selecciona el tipo de combustible por favor";
    }

    //2. Verificar datos
    if (empty($name)){
        $errors = true;
        $nameError = "Debes introducir el nombre del coche";
    }

    //3. Si todo va bien, me voy al index 
    if (!$errors){
        $_SESSION["name"] = $name;
        $_SESSION["drive"] = $drive;
        $_SESSION["fuel"] = $fuel;
        $_SESSION["originCar"] = "select-car";
        header("Location: inxex.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Seleccionar un coche </title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/layouts/header.php"; ?>
    <main>

        <?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/components/car.php"; ?>

    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/resources/views/layouts/footer.php"; ?>

</body>
</html>
