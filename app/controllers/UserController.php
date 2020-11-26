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
                echo "{'response' : 'Good'}";
            }
            else
            {
                echo "{'response' : 'Bad'}";
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
    }
    
?>