<?php

    class UserController
    {
        private $user;
        
        public function getUser()
        {
            return $this->user;
        }
        
        public function setUser($user)
        {
            $this->user = $user;
        }
        
        public function __construct()
        {
            $this->user = new User();
        }
        
        public function insert()
        {
            if($this->user->insert())
            {
                return "{'response' : 'Good'}";
            }
            else
            {
                return "{'response' : 'Bad'}";
            }
        }
        
        public function update()
        {
            if($this->user->update())
            {
                echo "{'response' : 'Good'}";
            }
            else
            {
                echo "{'response' : 'Bad'}";
            }
        }
        
        public function getAllJSON()
        {
            return $this->user->getAllJSON();
        }
        
        public function isEmailExist()
        {
            $test = false;
            if ($this->user->isEmailExist() == true)
            {
                echo "{'response' : 'Email is exist'}";
                $test = true;
            }
            return $test;
        }
    }
    
?>