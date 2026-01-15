<div class="principal">
    <h2> Selección un coche </h2>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="datos">
            <label for="name"> Modelo </label>
            <input type="text" name="name" id="name" placeholder="Modelo del coche">
        </div>

        <div class="datos">
            <label for="drive"> Conducción </label>
            <input type="radio" name="drive" id="drive" value="manual"> Manual
            <input type="radio" name="drive" id="drive" value="auto"> Automatico
        </div>

        <div class="datos">
            <label for="fuel"> Tipo de combustible: </label>
            <input type="radio" name="fuel" id="fuel" value="gasolina"> Gasolina
            <input type="radio" name="fuel" id="fuel" value="diesel"> Diesel
        </div>

        <!-- <div class="datos"> Aquí iria el id pero eso es una asignación de parte de la base de datos que tiene que estar relacionado con el modelo del coche

        </div> -->

        <!-- <div class="datos"> Aquí iria si la base de datos tiene que esta disponible el coche 

        </div> -->

        <!-- <div class="datos"> Aquí iria una imagen del coche

        </div> -->
    </form>
</div>