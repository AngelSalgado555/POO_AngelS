<?php
abstract class Users{
    public function __construct(
        protected string $name,
        protected string $surname,
        protected int $dni,
        protected bool $carnet,
        protected string $nickName,
        protected string $password,
        protected string $email
    ){}

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
        }    public static function verifyLogin(string $nickOrEmail, string $password): bool {
        foreach (self::$users as $user) {
            if (($user->getNickName() === $nickOrEmail || $user->getEmail() === $nickOrEmail)
                && $user->getPassword() === $password) {
                return true;
            }
        }
        return false;
    }

        /**
         * Set the value of name
         *
         * @return  self
         */ 
        public function setName($name)
        {
                $this->name = $name;

                return $this;
        }

        /**
         * Get the value of surname
         */ 
        public function getSurname()
        {
                return $this->surname;
        }

        /**

        /**
    
         * Set the value of surname
         *
         * @return  self
         */ 
        public function setSurname($surname)
        {
                $this->surname = $surname;

                return $this;
        }

        /**
         * Get the value of dni
         */ 
        public function getDni()
        {
                return $this->dni;
        }

        /**
         * Set the value of dni
         *
         * @return  self
         */ 
        public function setDni($dni)
        {
                $this->dni = $dni;

                return $this;
        }

        /**
         * Get the value of carnet
         */ 
        public function getCarnet()
        {
                return $this->carnet;
        }

        /**
         * Set the value of carnet
         *
         * @return  self
         */ 
        public function setCarnet($carnet)
        {
                $this->carnet = $carnet;

                return $this;
        }


        /**
    
        /**
         * Get the value of nickName
         */ 
        public function getNickName()
        {
                return $this->nickName;
        }

        /**
         * Set the value of nickName
         *
         * @return  self
         */ 
        public function setNickName($nickName)
        {
                $this->nickName = $nickName;

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
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        public function __tostring(){
                $ret = "Nombre: " . $this -> name . " Apellido: " . $this -> surname . " DNI: " . $this -> dni . " Carnet: ";
                if (!$this -> carnet){
                        $ret .= "No tiene ";
                } else {
                        $ret .= "Si tiene ";
                }
                $ret .= " NickName: " . $this -> nickName . " PassWord: " . $this -> password . " Email: " . $this -> email;

                return $ret;
        }
}

