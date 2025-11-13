<?php
include_once __DIR__ . "/Database.php";
include_once __DIR__ . "/Users.php";
class Register extends Users{
        public function __construct( $name,  $surname,  $dni,  $carnet,  $nickName,  $password, $email){
                parent::__construct($name, $surname, $dni, $carnet, $nickName, $password, $email);
        }

        public function registerUser(){
                if (Database::findUserByNickname($this -> nickName) !== null || Database::findUserByEmail($this -> email)){
                        return "El usuario ya existe ";
                }

                Database::addUser($this);
                return "Usuario creado exitosamente";
        }
}