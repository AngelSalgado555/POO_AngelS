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

        <div class="datos"> 
            
        </div>
    </form>
</div>