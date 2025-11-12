<?php
class Users{
    public function __construct(
        private array $names,
        private array $surnames,
        private array $dnis,
        private array $carnetss,
        private array $nicksName,
        private array $password,
        private array $emails
    ){}

       
    public function addUser($newUser, $newPass, $newMail){
        $users = $this -> nicksName; 
        for ($i=0; $i < count($users); $i++) { 
            if ($newUser == $users[$i]){
                return "El usuario ya existe";
            } else {
                $users.array_push($newUser);
            }
        }

        $pass = $this -> password;
        for ($i=0; $i < count($pass); $i++) { 
            if ($newPass == $pass[$i]){
                return "La contraseña ya existe";
            } else {
                $pass.array_push($newPass);
            }
        }

        $mails = $this -> mail;
        for ($i=0; $i < count($mails); $i++) { 
            if ($newMail == $mails[$i]){
                return "El correo ya esta registrado";
            } else {
                $mails.array_push($newMail);
            }
        }
    }
}

