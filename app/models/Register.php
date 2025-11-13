<?php
include $_SERVER['DOCUMENT_ROOT'] . "POO_AngelS/app/models/Database.php";
class Register extends Users{
        public function __construct( $name,  $surname,  $dni,  $carnet,  $nickName,  $password, $email){
                parent::__construct($name, $surname, $dni, $carnet, $nickName, $password, $email);
        }

        public function registerUser(){
                if (Database::findUserByNick($this -> nickName) !== null || Database::findUserByEmail($this -> email)){
                        return "El usuario ya existe ";
                }

                Database::addUser($this);
                return "Usuario creado exitosamente";
        }
}