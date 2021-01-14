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
            $response = "";
            if($this->user->insert())
            {
                $response = "Good";
            }
            else
            {
                $response = "Bad";
            }
            return json_encode(array('response'=> $response));
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
            $response = "";
            if($this->user->isEmailExist() == true)
            {
                $response = "Email is exist";
            }
            else
            {
                $response = "Email is not exist";
            }
            return json_encode(array('response'=> $response));
        }
        
        public function isLoginExist()
        {
            $response = "";
            if($this->user->isLoginExist() == true)
            {
                $response = "Login is not exist";
            }
            else
            {
                $response = "Login is not exist";
            }
            return json_encode(array('response'=> $response));
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
        
        public function findPasswordByEmail($email)
        {
            return $this->user->findPasswordByEmail($email);
        }
        
        public function findPasswordByLogin($login)
        {
            return $this->user->findPasswordByLogin($login);
        }
    }
    
?>