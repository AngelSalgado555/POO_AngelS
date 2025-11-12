<?php


class Login{
    public function __construct(
        private array $nickName,
        private array $password
    ){}
        

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

        public function login(){
                //Este sería un metodo para iniciar sesión, pero no lo implementaré ya que no se como acceder a los 
                //nicknames y contraseñas qeu estan en la clase Users desde aquí. 
                /*if ($this -> nickName == /*aqui iria el nickName de Users && $this -> password == /*aqui iria la contraseña de Users){
                        echo "Login exitoso";
                        return true;
                } else {
                        return false;
                }
                */
        }

        public function logout(){
                //Este sería un metodo para cerrar sesión, pero no lo implementaré ya que no se como acceder a los 
                //nicknames y contraseñas qeu estan en la clase Users desde aquí. 
                $this -> nickName = null;
                $this -> password = null;
                echo "Logout exitoso";
                return true;
        }

        
}