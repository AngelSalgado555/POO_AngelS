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
        <h3><u> Probando el metodo registerUser de la clase Register </u></h3>
        <p> También demuestro el uso del metodo __tostring de Users (Ver las siguientes lineas de código para confirmar) </p>
        <b>Explicación del metodo</b>
        <p> El metodo registerUser lo que hace es con junto con el metodo findUserByEmail y findUserByNick es ver si hay un usuario con ese nickName o email y si la contraseña también coincide es devolver un mensaje que diga que el usuario  ya existe, y en el caso contrario agregar al usuario a la "base de datos" con el metodo addUser</p>
        <?php
            include_once __DIR__ . "/../app/models/Register.php";
            include_once __DIR__ . "/../app/models/Login.php"; 
            include_once __DIR__ . "/../app/models/Database.php";
            include_once __DIR__ . "/../app/models/Users.php";
            include_once __DIR__ . "/../app/models/Car.php";
            $user1 = new Register("Angel", "Salgado", 12345678, true, "Ejemplo", "ContraseñaEjemplo", "ejemplo@gmail.com");

            $user1->registerUser();
            echo $user1 -> __tostring();
        ?> 
    </div>
    <div class="caja2">
        <h3><u> Probando el metodo login de la clase Login </u></h3>
        <b> Explicación del metodo </b>
        <p> El metodo login lo que hace es llamar al metodo verifyLogin de la clase Database y lo que hace es ver si los parametros pasados coinciden con algun usuario de la "base de datos" y en caso de que sea así entonces devuelve un mensaje de "Inicio de sesión exitoso" junto con un booleano true (para usar en el futuro para llevar un registro de inicios de sesión) y en caso contrario devuelve un mensaje de "No se pudo iniciar sesión" junto con un booleano false</p>
        <?php
            $login = new Login();
            $login->login("Ejemplo", "ContraseñaEjemplo");
        ?>
    </div>
    <div class="caja3">
        <h3><u> Probando el metodo getUsers de la clase Database </u></h3>
        <b> Explicación del metodo getUsers </b>
        <p> Lo que hace este metodo es devolver todos los usuarios de la "base de datos" y en este apartado lo que he hecho es recorrer todos esos usuarios para que se pudiese apreciar que si devulve todos </p>
        <?php
            $user2 = new Register("Juan", "Pérez", 87654321, false, "Ejemplo2", "ContraseñaEjemplo2", "ejemplo2@gmail.com");
            $user2->registerUser();
            $allUsers = Database::getUsers();
            for ($i=0; $i < count($allUsers); $i++) { 
                echo "<h3>Usuario $i</h3> <br>".$allUsers[$i]->__toString() . "<hr>";
            }
        ?> 
    </div>
    <div class="caja4">
        <h3><u> Demás metodos (explicación de porque no van separados)</u></h3>
        <p> Los demas metodos como findUserByEmail, findUserByNick, verifyLogin van implementado en el metodo registerUser, por lo que haré sera copiar el código aquí y explicarlos: <br>

        <b> findUserByEmail:</b><br>
        public static function findUserByEmail(string $email): Users | null { <br>
        foreach (self::$users as $user) { <br>
            if ($user->getEmail() === $email) { <br>
                return $user; <br>
            } <br>
        } <br>
        return null; <br>
        } <br>

        Este metodo busca en la "base de datos" (array estático) si existe un usuario con el email que se le pasa. Si lo encuentra, devuelve el usuario, si no, devuelve null. <hr>

        <b> findUserByNickName:</b><br>
        public static function findUserByEmail(string $email): Users | null { <br>
        foreach (self::$users as $user) { <br>
            if ($user->getEmail() === $email) { <br>
                return $user; <br>
            } <br>
        } <br>
        return null; <br>
        } <br>

        Este metodo busca en la "base de datos" (array estático) si existe un usuario con el email que se le pasa. Si lo encuentra, devuelve el usuario, si no, devuelve null. <hr>

        <b> verifyLogin:</b><br>
        public static function verifyLogin(string $nickOrEmail, string $password): bool { <br>
        foreach (self::$users as $user) { <br>
            if (($user->getNickName() === $nickOrEmail || $user->getEmail() === $nickOrEmail) <br>
                && $user->getPassword() === $password) { <br>
                echo "Inicio de sesión exitoso"; <br>
                return true; <br>
            } <br>
        } <br>
        echo "No se pudo iniciar sesión"; <br>
        return false; <br>
        } <br>

        Este metodo lo que hace es buscar en la "base de datos" si existe un usuario que tenga ese nickName o email (lo hice con ambos parametros pensado a futuro y en un caso realista) y que la contraseña pasada conincidan y en el caso de ser así devuelve true junto con el mesaje de Inicio de sesión exitoso, y sino devuelve false junto con el mensaje de No se pudo iniciar sesión. <hr>
        </p>
    </div>
    <div class="caja5">
        <h3><u> Clase Car (pequeña demostración) </u></h3>
        <p> Aquí hago uso de dos metodos (addCar y showCard) donde addCar es para añadir un coche a la base de datos y showCard es para mostrar la información del coche.</p>
        <?php
            $car1 = new Car("Toyota Corolla", "Automática", "Gasolina", 123456, true, "/POO_AngelS/resources/assets/cocheToyota.webp");
            Database::addCar($car1);
            echo $car1 -> showCard();
        ?>
        <hr>
    </div>
    <div class="caja6">
        <b> Puntos importantes que creo que merecen una aclaración </b>
        La clase Database simula una base de datos usando un array estático para almacenar los usuarios.
        Todo el tema de ser array estatico fue hecho con ayuda de IA ya que no tenia idea de como simular una base de datos así y la decición de hacerlo también esta impulsada por poder hacer ejemplos con los otros metodos. <br><br>

        También una explicación rapida de unas parte de los metodos como findUserByEmail y findUserByNickName y es que en el bucle foreach se hace uso de self::$users (cosa que no hemos dado en clase y por la cual pienso que merece una explicación) y es que self hace referencia a la propia clase (en este caso Database) y se usa para acceder a propiedades o métodos estáticos de la propia clase ya que son estáticos y no se pueden acceder mediante $this, y en los casos de self::$users es para acceder al array estático que simula la base de datos de los usuarios, 
        al igual que en los otros metodos por ejemplo self::verifyLogin o self::findUserByNickname que es para llamar a estos metodos ya que son estáticos.<br><br>

        Otra cosa importante creo que son las rutas ya que hago uso de __DIR__ ya que aquí si que necesite ayuda de IA ya que estaba teniendo muchos problemas con las rutas y no podía avanzar en el proyecto. <br><br>

        En caso de tener un sugerencia, consejo, duda o objeción sobre cualquier cosa del proyecto, por favor hazmela saber, ya que me serviría mucho aun si fallo en algo, y gracias por ver el proyecto :)<br><br>
    </div>
    <footer class="pie"><p> "Una conducción segura, es una conducción bien recibida" </p></footer>
</body>
</html>