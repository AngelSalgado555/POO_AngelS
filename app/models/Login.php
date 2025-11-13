<?php


class Login extends Users{
        public function __construct(
        $nicksName, 
        $password, 
        $emails,
        private string $nickName,
        private string $pass){
                parent::__construct($nicksName, $password, $emails);
        }


        public function login($nickName, $pass){
                for ($i=0; $i < count($this -> nicksName); $i++) { 
                        if ($this -> nicksName[$i] == $nickName){
                                continue;
                        }
                }

                for ($i=0; $i < count($this -> password); $i++) { 
                        if ($this -> password[$i] == $pass){
                                continue;
                        }
                }

                echo "Login success!";
        }

        public function logout(){
                $this -> nickName == null;
                $this -> pass == null;

                echo "Logout success!";
        }

        //Planeo hacer un metodo de recuperación de contraseña, pero aun no se como implementarla

}