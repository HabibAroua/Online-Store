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
            //fields
        }
    }
?>