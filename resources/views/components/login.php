<!-- Formulario de Login -->
<div class="form container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h2 class="card-title text-center mb-4"> Iniciar Sesión </h2>

                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" id="loginForm">
                        <!-- Correo para iniciar sesión -->
                        <div class="form-group mb-3">
                            <label for="correo-login" class="form-label"> Ingresa el correo electronico: </label>
                            <input type="text" class="form-control" id="correo-login" name="correo-login">
                        </div>

                        <!-- Contraseña (Tengo que compararla con la contraseña real) -->
                        <div class="form-group mb-3">
                            <label for="pass-login" class="form-label"> Ingresa tu contraseña: </label>
                            <input type="text" class="form-control" id="pass-login" name="pass-login">
                        </div>

                        <!-- Cookie -->
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="cookie" id="cookie">
                            <label for="cookie" class="form-check-label"> Marca si quieres seguir conectado </label>
                        </div>

                        <!-- Iniciamos sesión -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Iniciar Sesión</button>
                        </div>


                        <!-- Si no tiene cuenta, que se vaya a registrar -->
                        <div class="form-footer">
                            ¿No tienes cuenta? <a href="/public/form-signup.php"
                                id="go-to-signup">Regístrate</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>