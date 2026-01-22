<?php
session_start();

$brand = $drive = $fuel = $model = "";
$available = false; 
$year = $price = 0; 
$brandError = $driveError = $fuelError = $modelError = $yearError = $priceError = $availableError = "";
$errors = false;
$errorDB = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    //1. Recoger datos 
    require_once $_SERVER['DOCUMENT_ROOT'] . "/utils/secure.php";
    $brand = secure($_POST["brand"]);
    $drive = secure($_POST["drive"]);
    $fuel = secure($_POST["fuel"]);
    $available = (bool) $_POST["available"];
    $model = secure($_POST["model"]);
    $year = $_POST["year"];
    $price = $_POST["price"];

    //2. Verificar datos
    if (empty($brand)){
        $errors = true;
        $brandError = "Ingresa una marca de coche!";
    } 

    if (empty($drive)){
        $errors = true;
        $driveError = "Selecciona el tipo de conducción del coche";
    }

    if (empty($fuel)){
        $errors = true;
        $fuelError = "Selecciona el tipo de combustible";
    }

    if (empty($available)){
        $errors = true; 
        $availableError = "Selecciona si esta disponible o no el coche";
    }

    if (empty($model)){
        $errors = true;
        $modelError = "Intrduce el modelo del coche por favor"; 
    }

    if (empty($year)){
        $errors = true;
        $yearError = "Intrduce el de creación del coche"; 
    }

    if (empty($price)){
        $errors = true;
        $priceError = "Intrduce el valor del renting del coche"; 
    }

    //3. Si todo va bien, me voy al index 
    if (!$errors){
        $_SESSION["brand"] = $brand;
        $_SESSION["drive"] = $drive;
        $_SESSION["fuel"] = $fuel;
        $_SESSION["available"] = $available;
        $_SESSION["model"] = $model;
        $_SESSION["year"] = $year;
        $_SESSION["price"] = $price;

       header("Location: index.php");
        
        //Lo guardo en la DB
        require_once $_SERVER['DOCUMENT_ROOT'] . "/app/repositories/CarDAO.php";
        $c = new Car($brand, $drive, $fuel, $available, $model, $year, $price);
        if (CarDAO::create($c)){
            //Aquí lo que queremos que pase cuando no haya error
            echo "Creado exitosamente";
        } else {
            //Aquí lo que quieras que pase cuando hay un error 
            $errorDB = "No se creo correctamente";
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
    <title> Seleccionar un coche </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/views/layouts/header.php"; ?>

        <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/views/components/create-car.php"; ?>

    <?php require_once $_SERVER['DOCUMENT_ROOT'] . "/resources/views/layouts/footer.php"; ?>
</body>
</html>
