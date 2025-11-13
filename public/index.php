<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> RentoGo </title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="cabeza"><p> Bienvenido RentoGo, tu página de renting confiable </p></header>
    <br>
    <br>
    <nav>
        <ul> 
            <li><a href="#">Registrarse</a></li>
            <li><a href="#">Log in</a></li>
            <li><a href="#">Coches en stock</a></li>
            <li><a href="#">Log out</a></li>
        </ul>
    </nav>

    <div class="caja1">
        <?php
            include_once $_SERVER['DOCUMENT_ROOT'] . "POO_AngelS/app/models/Register.php";
            include_once $_SERVER['DOCUMENT_ROOT'] . "POO_AngelS/app/models/Users.php";
            $user1 = new Register("Angel Gabriel", "Salgado Licona", 55555, true, "Slayer55", "Angelsalgado2024", "angelsalgadolicona4444@gmail.com");

            $login = new Login();
            $login->login("Slayer55", "Angelsalgado2024");            
        ?> 
    </div>
    <footer class="pie"><p> "Una conducción segura, es una conducción bien recibida" </p></footer>
</body>
</html>