<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Car.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/core/CoreDB.php";
class CarDAO{
    /**
     * Insertar un car a la base de datos de car
     */
    public static function create($car) :bool{
        //Conexión 
        $conn = CoreDB::getConnection();
        $sql = "INSERT INTO cars (brand, drive, fuel, available, model, year, price) VALUES (?, ?, ?, ?, ?, ?, ?);";
        $ps = $conn -> prepare($sql);

        //Bind
        $brand = $car -> getBrand();
        $drive = $car -> getDrive();
        $fuel = $car -> getFuel();
        $available = $car -> getAvailable();
        $model = $car -> getModel();
        $year = $car -> getYear();
        $price = $car -> getPrice();

        $ps -> bind_param("sssisid", $brand, $drive, $fuel, $available, $model, $year, $price);

        //Condición 
        try{
            //Lanzamiento de consulta: 
            $ps -> execute();

            //Recupero el ID
            $id = $ps -> insert_id;
            $car -> setId($id);
        } catch (Exception $e){
            var_dump($e -> getMessage());
            $conn -> close();
            return false;
        }

        $conn -> close();
        return true; 
    }

    public static function read($id): ?Car{
        //Conexión 
        $conn = CoreDB::getConnection();
        $sql = "SELECT * FROM cars WHERE $id = ?;";
        $ps = $conn -> prepare($sql);

        //Bind
        $ps -> bind_param("s", $id);
        $ps -> execute();

        $result = $ps -> get_result();

        if ($result -> num_rows > 0){
            $row = $result -> fetch_assoc();
            $c = new Car(
                $row["brand"],
                $row["drive"],
                $row["fuel"],
                $row["available"],
                $row["model"],
                $row["year"],
                $row["price"]
            );
        }

        return $c;
    }

    public static function delete($id){
        //Conexión
        $conn = CoreDB::getConnection();
        $sql = "DELETE FROM cars WHERE $id = ?;";
        $ps = $conn -> prepare($sql);

        //Bind 
        $ps -> bind_param("s", $id);

        try{
            //Lanzamiento de consulta
            $ps -> execute();

        } catch (Exception $e){
            $conn -> close();
            return null; 

        }
        $conn -> close();
        return "Se ha eliminado correctamente el coche";
    }
}