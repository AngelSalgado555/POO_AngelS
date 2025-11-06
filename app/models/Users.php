<?php
class Users{
    public function __construct(
        private array $username,
        private array $password,
        private array $mail
    ){}

        /**
         * Get the value of username
         */ 
        public function getUsername()
        {
                return $this->username;
        }

        /**
         * Set the value of username
         *
         * @return  self
         */ 
        public function setUsername($username)
        {
                $this->username = $username;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPassword()
        {
                return $this->password;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPassword($password)
        {
                $this->password = $password;

                return $this;
        }

        /**
         * Get the value of mail
         */ 
        public function getMail()
        {
                return $this->mail;
        }

        /**
         * Set the value of mail
         *
         * @return  self
         */ 
        public function setMail($mail)
        {
                $this->mail = $mail;

                return $this;
        }
    public function addUser($newUser, $newPass, $newMail){
        $users = $this -> username; 
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

