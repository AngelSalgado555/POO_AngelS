<?php

class Coche{
    public function __construct(
        private string $name,
        private string $typeDrive,
        private string $fuel,
        private int $id, 
        private bool $available,
        private string $image
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
         * Get the value of typeDrive
         */ 
        public function getTypeDrive()
        {
                return $this->typeDrive;
        }

        /**
         * Set the value of typeDrive
         *
         * @return  self
         */ 
        public function setTypeDrive($typeDrive)
        {
                $this->typeDrive = $typeDrive;

                return $this;
        }

        /**
         * Get the value of fuel
         */ 
        public function getFuel()
        {
                return $this->fuel;
        }

        /**
         * Set the value of fuel
         *
         * @return  self
         */ 
        public function setFuel($fuel)
        {
                $this->fuel = $fuel;

                return $this;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

    

        /**
         * Get the value of available
         */ 
        public function getAvailable()
        {
                return $this->available;
        }

        /**
         * Set the value of available
         *
         * @return  self
         */ 
        public function setAvailable($available)
        {
                $this->available = $available;

                return $this;
        }

        /**
         * Get the value of image
         */ 
        public function getImage()
        {
                return $this->image;
        }

        /**
         * Set the value of image
         *
         * @return  self
         */ 
        public function setImage($image)
        {
                $this->image = $image;

                return $this;
        }

        public function showCard(){
                $ret = "Nombre: " . $this-> name . " Tipo de Conducción: " . $this -> typeDrive . " Combustible: " . $this -> fuel . " ID: " . $this -> id . " Disponible: " . $this -> available . " Imagen: " . $this -> image;

                return $ret;
        }
}