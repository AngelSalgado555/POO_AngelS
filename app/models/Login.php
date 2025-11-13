<?php


class Login extends Users{
        public function __construct($nicksName, $password, $emails, ){
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

                echo "Login success";
        }
}