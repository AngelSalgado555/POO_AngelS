<?php

class Coche{
    public function __construct(
        private string $name,
        private string $typeDrive,
        private string $fuel,
        private int $id
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

    
}