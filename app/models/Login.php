<?php

class Login extends Users{
        public function __construct(string $name = "", string $surname = "", int $dni = 0, bool $carnet = false, string $nickName = "", string $password = "", string $email = ""){
                parent::__construct($name, $surname, $dni, $carnet, $nickName, $password, $email);
        }

        public function login($nickOrEmail, $password){
                return Database::verifyLogin($nickOrEmail, $password);
        }
}