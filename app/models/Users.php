<?php
class Users{
    public function __construct(
        private array $names,
        private array $surnames,
        private array $dnis,
        private array $carnets,
        private array $nicksName,
        private array $password,
        private array $emails
    ){}

        /**
         * Get the value of names
         */ 
        public function getNames()
        {
                return $this->names;
        }

        /**
         * Set the value of names
         *
         * @return  self
         */ 
        public function setNames($names)
        {
                $this->names = $names;

                return $this;
        }

        /**
         * Get the value of surnames
         */ 
        public function getSurnames()
        {
                return $this->surnames;
        }

        /**
         * Set the value of surnames
         *
         * @return  self
         */ 
        public function setSurnames($surnames)
        {
                $this->surnames = $surnames;

                return $this;
        }

        /**
         * Get the value of dnis
         */ 
        public function getDnis()
        {
                return $this->dnis;
        }

        /**
         * Set the value of dnis
         *
         * @return  self
         */ 
        public function setDnis($dnis)
        {
                $this->dnis = $dnis;

                return $this;
        }

        /**
         * Get the value of carnets
         */ 
        public function getCarnets()
        {
                return $this->carnets;
        }

        /**
         * Set the value of carnets
         *
         * @return  self
         */ 
        public function setCarnets($carnets)
        {
                $this->carnets = $carnets;

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
         * Get the value of emails
         */ 
        public function getEmails()
        {
                return $this->emails;
        }

        /**
         * Set the value of emails
         *
         * @return  self
         */ 
        public function setEmails($emails)
        {
                $this->emails = $emails;

                return $this;
        }

    public function addUser($newNickName, $newPass, $newEmail, $newName, $newSurname, $newDni, $newCarnet){
        array_push($this->nicksName, $newNickName);
        array_push($this->password, $newPass);
        array_push($this->emails, $newEmail);
        array_push($this->names, $newName);
        array_push($this->surnames, $newSurname);
        array_push($this->dnis, $newDni);
        array_push($this->carnets, $newCarnet);
        
    }
}

