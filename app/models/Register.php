<?php
include $_SERVER['DOCUMENT_ROOT'] . "POO_AngelS/app/models/Users.php";
class Register extends Users{
        public function __construct( $name,  $surname,  $dni,  $carnet,  $nickName,  $password, $email){
                parent::__construct($name, $surname, $dni, $carnet, $nickName, $password, $email);
        }

        public function addUser($newNickName, $newPass, $newEmail, $newName, $newSurname, $newDni, $newCarnet){
                $names = [$newDni => $newName];
                $surnames = [$newDni => $newSurname];
                $dnis = [$newDni => $newName];
                $carnets = [$newDni => $newCarnet];
                $nicksNames = [$newDni => $newNickName];
                $password = [$newDni => $newPass];
                $emails = [$newDni => $newEmail];
  
        }

}