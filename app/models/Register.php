<?php

class Register extends Users{
        public function __construct(array $names, array $surnames, array $dnis, array $carnets, array $nicksName, array $password, array $emails){
                parent::__construct($names, $surnames, $dnis, $carnets, $nicksName, $password, $emails);
        }

        public function addUser($newNickName, $newPass, $newEmail, $newName, $newSurname, $newDni, $newCarnet){
                array_push($this -> names, $newName);
                array_push($this -> surnames, $newSurname);
                array_push($this -> dnis, $newDni);
                array_push($this -> nicksName, $newNickName);
                array_push($this -> emails, $newEmail);
                array_push($this -> carnets, $newCarnet);
                array_push($this -> password, $newPass);
        }

}