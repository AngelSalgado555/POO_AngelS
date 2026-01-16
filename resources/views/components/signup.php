<!-- Formulario de Signup : --> 
<div class="form">
    <h2>Crear cuenta:</h2>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" id="signupForm">
        <div class="form-data">
            <label for="name"> Nombre: </label>
            <input type="text" id="name" name="name" placeholder="Solamente el nombre...">
        </div>

        <div class="form-data">
            <label for="surname"> Apellidos: </label>
            <input type="text" id="surname" name="surname" placeholder="Ingresa los apellidos..">
        </div>

        <div class="form-data">
            <label for="dni"> DNI: </label>
            <input type="text" id="dni" name="dni" placeholder="12345678X">
        </div>

        <div class="form-data">
            <label for="carnet"> Tienes carnet de conducir: </label>
            <input type="radio" id="carnet" name="carnet" value="si">Si
            <input type="radio" id="carnet" name="carnet" value="no">No
        </div>

        <div class="form-data">
            <label for="password"> Contraseña: </label>
            <input type="password" id="password" name="password" placeholder="Crea tu contraseña">

            <label for="confirm-password"> Repite contraseña: </label>
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Repite tu contraseña por favor"> 
        </div>

        <div class="form-data">
            <label for="email"> Email: </label>
            <input type="text" name="email" id="email" placeholder="Ingresa tu email por favor">
        </div>

        <button type="submit"> Crear cuenta </button>

        <div class="form-footer">
            ¿Ya tienes cuenta? <a href="/public/form-login.php"; id="go-to-login">Inicia Sesión</a>
        </div>
    </form>
</div>