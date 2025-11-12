<?php

class Register{
    public function __construct(
        private string $name,
        private string $surname,
        private string $dni,
        private bool $carnet,
        private string $nicksName,
        private string $password,
        private string $email
    ){}

        /**
         * Get the value of name
         */ 
        public function getName()
        {
                return $this->name;
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
         * Get the value of nicksName
         */ 
        public function getNicksName()
        {
                return $this->nicksName;
        }

        /**
         * Set the value of nicksName
         *
         * @return  self
         */ 
        public function setNicksName($nicksName)
        {
                $this->nicksName = $nicksName;

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


        
}