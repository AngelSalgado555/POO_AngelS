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
        $sql = "INSERT INTO cars (name, typeDrive, fuel, id, available) VALUES (?, ?, ?, ?, ?);";
        $ps = $conn -> prepare($sql);

        //Bind
        $name = $car -> getName();
        $typeDrive = $car -> getTypeDrive();
        $fuel = $car -> getFuel();
        $id = $car -> getId();
        $available = $car -> getAvailable();

        // $ps -> bind_param("sss")

        //Condición 
        try{
            //Lanzamiento de consulta: 
            $ps -> execute();

        } catch (Exception $e){
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
                $row["name"],
                $row["typeDrive"],
                $row["fuel"],
                $row["id"],
                $row["available"]
            );
        }

        return $c;
    }
}