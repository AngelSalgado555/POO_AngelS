<?php

require_once $_SERVER['DOCUMENT_ROOT'] . "/app/models/Users.php"; 
require_once $_SERVER['DOCUMENT_ROOT'] . "/app/core/CoreDB.php"; 

class UserDAO{
    /**
     * Inserta en la bd un usuario. El método hashea la contraseña antes de meterla en la bd
     * @param Users $user usuario con la contraseña clara
     * @return bool true si se ha insertado bien, false si no se ha insertado (xej, ya existe un usuario con ese email)
     */

    public static function create($user): bool{
        //Establecer la conexión con la bd
        $conn = CoreDB::getConnection();

        $sql = "INSERT INTO users (name, surname, dni, carnet, password, email) VALUES (?, ?, ?, ?, ?, ?);";
        $ps = $conn -> prepare($sql);

        //Bind
        $name = $user -> getName();
        $surname = $user -> getSurname(); 
        $dni = $user -> getDni(); 
        $carnet = $user -> getCarnet(); 
        $pass = $user -> getPassword(); 
        $passHash = password_hash($pass, PASSWORD_DEFAULT); //Contraseña hassheada
        $email = $user -> getEmail(); 

        $ps -> bind_param("sssiss", $name, $surname, $dni, $carnet, $passHash, $email);

        //Condición 
        try{
            //Lanzamiento de consulta
            $ps -> execute();

            //Recupera el id
            $id = $ps -> insert_id; 
            $user -> setId($id);
        } catch (Exception $e){
            $conn -> close(); 
            return false;
        }
        $conn -> close(); 
        return true; 

    }

    public static function read($id): ?Users{
        //Establecer conexión 
        $conn = CoreDB::getConnection(); 
        $sql = "SELECT * FROM users WHERE $id = ?;";
        $ps = $conn -> prepare($sql);

        //Bind 
        $ps -> bind_param("s", $id);
        $ps -> execute(); 

        $result = $ps -> get_result();

        //En result tengo el objeto mysql _result con la información leída de la BD
        if ($result -> num_rows > 0){
            $row = $result -> fetch_assoc(); 
            $u = new Users(
                $row["name"],
                $row["surname"],
                $row["dni"],
                $row["carnet"],
                $row["password"],
                $row["email"]
            );
        }

        $conn -> close();
        return $u;
    }


    // public static function delete($id) :void{
    //     //Conexión 
    //     $conn = CoreDB::getConnection();
    //     $sql = "DELETE FROM users WHERE id = $id";
    //     $conn -> query($sql);
    //     $conn -> close();

    // }

    public static function readByEmail($email){
        //Conexión 
        $conn = CoreDB::getConnection();
        $sql = "SELECT * FROM users WHERE $email = ?;";
        $ps = $conn -> prepare($sql);

        //Bind
        $ps -> bind_param("s", $email); 

        //Condición 
        try{
            //Lanzamiento de consulta
            $ps -> execute();
            
        } catch (Exception $e){
            $conn -> close(); 
            return false;
        }
        $conn -> close(); 
        return true; 
    }
}