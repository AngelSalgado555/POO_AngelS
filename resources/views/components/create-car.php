<!-- Formulario Crear Coche -->
<div class="form container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h2 class="card-title text-center mb-4">Crear coche</h2>

                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" id="carForm">

                        <!-- Marca -->
                        <div class="form-group mb-3">
                            <label for="brand" class="form-label">Marca:</label>
                            <input type="text" class="form-control" id="brand" name="brand" placeholder="Marca del coche"
                                value="<?= $brand ?>"
                                class="<?= empty($brandError) ? "" : "data-error" ?>"
                            >
                        </div>

                        <!-- Modelo -->
                        <div class="form-group mb-3">
                            <label for="model" class="form-label">Modelo:</label>
                            <input type="text" class="form-control" id="model" name="model" placeholder="Modelo del coche"
                                value="<?= $model ?>"
                                class="<?= empty($modelError) ? "" : "data-error" ?>"
                            >
                        </div>

                        <!-- Año -->
                        <div class="form-group mb-3">
                            <label for="year" class="form-label">Año del coche:</label>
                            <input type="number" class="form-control" id="year" name="year" placeholder="Introduce el año"
                                value="<?= $year ?>"
                                class="<?= empty($yearError) ? "" : "data-error" ?>"
                            >
                        </div>

                        <!-- Transmisión -->
                        <div class="form-group mb-3">
                            <label class="form-label d-block">Transmisión:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="manual" name="drive" value="manual">
                                <label class="form-check-label" for="manual">Manual</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="auto" name="drive" value="auto">
                                <label class="form-check-label" for="auto">Automático</label>
                            </div>

                            <?php if ($driveError): ?>
                                <div class="text-danger mt-2"> <?= $driveError ?> </div>
                            <?php endif ?>
                        </div>

                        <!-- Combustible -->
                        <div class="form-group mb-3">
                            <label class="form-label d-block">Tipo de combustible:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="gasolina" name="fuel" value="gasolina">
                                <label class="form-check-label" for="gasolina">Gasolina</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="diesel" name="fuel" value="diesel">
                                <label class="form-check-label" for="diesel">Diésel</label>
                            </div>
                            <?php if ($fuelError): ?>
                                <div class="text-danger mt-2"> <?= $fuelError ?> </div>
                            <?php endif ?>
                        </div>

                        <!-- Disponible -->
                        <div class="form-group mb-3">
                            <label class="form-label d-block">Disponible:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="disponible" name="available" value="1">
                                <label class="form-check-label" for="disponible">Sí</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="noDisponible" name="available" value="0">
                                <label class="form-check-label" for="noDisponible">No</label>
                            </div>
                            <?php if ($availableError): ?>
                                <div class="text-danger mt-2"> <?= $availableError ?> </div>
                            <?php endif ?>
                        </div>

                        <!-- Precio -->
                        <div class="form-group mb-4">
                            <label for="price" class="form-label">Precio:</label>
                            <div class="input-group">
                                <input type="number" class="form-control" id="price" name="price" placeholder="Valor del coche"
                                    value="<?= $price ?>"
                                    class="<?= empty($priceError) ? "" : "data-error" ?>"
                                >
                                <span class="input-group-text">€</span>
                            </div>
                        </div>

                        <!-- Botón -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg">
                                Guardar coche
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- <div class="principal">
    <h2> Crear un coche para la DB </h2>
    <form action=" ?>" method="post">
        <div class="datos">
            <label for="brand"> Marca: </label>
            <input type="text" name="brand" id="brand" placeholder="Marca del coche">
        </div>

        <div class="datos">
            <label for="drive"> Transmisión: </label>
            <input type="radio" name="drive" id="drive" value="manual"> Manual
            <input type="radio" name="drive" id="drive" value="auto"> Automatico
        </div>

        <div class="datos">
            <label for="fuel"> Tipo de combustible: </label>
            <input type="radio" name="fuel" id="fuel" value="gasolina"> Gasolina
            <input type="radio" name="fuel" id="fuel" value="diesel"> Diesel
        </div>

        <div class="datos">
            <label for="available"> Disponible: </label>
            <input type="radio" name="disponible" id="available" value="1">
            <input type="radio" name="reservado" id="available" value="0">  
        </div>

        <div class="datos"> 
            <label for="model"> Modelo: </label>
            <input type="text" name="model" id="model" placeholder="Modelo del coche">
        </div>

        <div class="datos">
            <label for="year"> Año del coche: </label>
            <input type="text" name="year" id="year" placeholder="Introduce el año del coche">
        </div>

        <div class="datos">
            <label for="price"> Precio del coche: </label>
            <input type="number" name="price" id="price" placeholder="Valor del coche">
            <span class="input-group-text">€</span>
        </div>
    </form>
</div> -->