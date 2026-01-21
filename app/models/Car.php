<?php
include_once __DIR__ . "/Database.php";
class Car{
    public function __construct(
        private string $brand,
        private string $typeDrive,
        private string $fuel,
        private int $id, 
        private bool $available,
        private string $model,
        private int $year, 
        private float $price, 

    ){}
    
        public function showCard(){
                $ret = "<b>Nombre:</b> " . $this-> brand . "<br><b> Tipo de Conducción:</b> " . $this -> typeDrive . 
                "<br><b> Combustible:</b> " . 
                $this -> fuel . "<br><b> ID:</b> " . $this -> id . "<br><b> Disponible:</b> ";
                if (!$this -> available){
                        $ret .= " No esta disponible";
                } else {
                        $ret .= " Si esta disponible";
                }

                $ret .= "<br><b> Imagen:</b> " . $this -> model;

                return $ret;
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
         * Get the value of model
         */ 
        public function getModel()
        {
                return $this->model;
        }

        /**
         * Set the value of model
         *
         * @return  self
         */ 
        public function setModel($model)
        {
                $this->model = $model;

                return $this;
        }

        /**
         * Get the value of brand
         */ 
        public function getBrand()
        {
                return $this->brand;
        }

        /**
         * Set the value of brand
         *
         * @return  self
         */ 
        public function setBrand($brand)
        {
                $this->brand = $brand;

                return $this;
        }

        /**
         * Get the value of year
         */ 
        public function getYear()
        {
                return $this->year;
        }

        /**
         * Set the value of year
         *
         * @return  self
         */ 
        public function setYear($year)
        {
                $this->year = $year;

                return $this;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Set the value of price
         *
         * @return  self
         */ 
        public function setPrice($price)
        {
                $this->price = $price;

                return $this;
        }
}