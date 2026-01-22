<!-- Formulario de Signup : --> 
<div class="form container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h2 class="card-title text-center mb-4">Crear cuenta</h2>
                    
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" id="signupForm">
                        <!-- Nombre -->
                        <div class="form-group mb-3">
                            <label for="name" class="form-label">Nombre:</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Solamente el nombre..."
                                value="<?= $name ?>"
                                class="<?= empty($nameError) ? "" : "data-error" ?>"
                            >
                        </div>

                        <!-- Apellidos -->
                        <div class="form-group mb-3">
                            <label for="surname" class="form-label">Apellidos:</label>
                            <input type="text" class="form-control" id="surname" name="surname" placeholder="Ingresa los apellidos.."
                                value="<?= $surname ?>"
                                class="<?= empty($nameError) ? "" : "data-error" ?>"
                            >
                        </div>

                        <!-- DNI -->
                        <div class="form-group mb-3">
                            <label for="dni" class="form-label">DNI:</label>
                            <input type="text" class="form-control" id="dni" name="dni" placeholder="12345678X"
                                value="<?= $dni ?>"
                                class="<?= empty($nameError) ? "" : "data-error" ?>" requiered
                            >
                        </div>

                        <!-- Carnet de conducir -->
                        <div class="form-group mb-3">
                            <label class="form-label d-block">¿Tienes carnet de conducir?</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="carnet_si" name="carnet" value="1">
                                <label class="form-check-label" for="carnet_si">Sí</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="carnet_no" name="carnet" value="0">
                                <label class="form-check-label" for="carnet_no">No</label>
                            </div>
                        </div>

                        <!-- Contraseñas -->
                        <div class="form-group mb-3">
                            <label for="password" class="form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Crea tu contraseña"
                                value="<?= $password ?>"
                                class="<?= empty($passError) ? "" : "data-error" ?>"
                            >
                        </div>

                        <div class="form-group mb-3">
                            <label for="confirm-password" class="form-label">Repite contraseña:</label>
                            <input type="password" class="form-control" id="confirm-password" name="confirm-password" placeholder="Repite tu contraseña por favor"
                                value="<?= $password2 ?>"
                                class="<?= empty($passError) ? "" : "data-error" ?>"
                            >
                            <?php if ($password == $password2){
                                $passError = "Las contraseñas no coinciden.";
                            } ?>
                    
                        </div>

                        <!-- Email -->
                        <div class="form-group mb-4">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu email por favor"
                                value="<?= $email ?>"
                                class="<?= empty($emailError) ? "" : "data-error" ?>"
                            >
                        </div>

                        <!-- Botón de submit -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">Crear cuenta</button>
                        </div>

                        <!-- Enlace para login -->
                        <div class="form-footer text-center mt-4">
                            ¿Ya tienes cuenta? <a href="/public/form-login.php" id="go-to-login" class="text-decoration-none">Inicia Sesión</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>