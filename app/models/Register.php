<?php

class Register extends Users{
    public function __construct(
        $mail, 
        $username,
        $password,
        private string $mailUser,
        private string $nickName,
        private string $passWord,
    ){}

    
        /**
         * Get the value of mail
         */ 
        public function getMail()
        {
                return $this->mailUser;
        }

        /**
         * Set the value of mail
         *
         * @return  self
         */ 
        public function setMail($mailUser)
        {
                $this->mailUser = $mailUser;

                return $this;
        }

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
         * Get the value of passWord
         */ 
        public function getPassWord()
        {
                return $this->passWord;
        }

        /**
         * Set the value of passWord
         *
         * @return  self
         */ 
        public function setPassWord($passWord)
        {
                $this->passWord = $passWord;

                return $this;
        }
    
    public function addUser($newUser, $newPass, $newMail){
        
    }
}