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
        
        public function sendEmail($email,$first_name)
        {
            $url = 'http://localhost/Online-Store';
            require_once('../mail/Email.php');
            $e =new Email
            (
                'Admin',
                $email,
                "Welcome to our WebSite: Confirm Registration",
                "<b>Dear $first_name,</b></br>Thanks for joining to our WebSite.
                To complete your registration, please confirm your email address:</br>
                <a href='$url'>Confirmation of you email</a>"
            );
            $e->mySettings('habib.aroua@sesame.com.tn','habib.aroua@hotmail.framour88');
            $e->SMTP_Settings('smtp.gmail.com',465);
            $e->Email_Settings();
            return ($e->send());
        }
    }
    
?>