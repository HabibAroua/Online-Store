<?php

    use PHPMailer\PHPMailer\PHPMailer;
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
    
    class Email
    {
        private $mail;
        
        private $your_email;
        private $password;
        
        private $name;
        private $email;
        private $subject;
        private $body;
        
        public function __construct($name, $email,$subject, $body)
        {
            $this->name = $name;
            $this->email = $email;
            $this->subject = $subject;
            $this->body = $body;
            $this->mail = new PHPMailer();
        }
        
        //name
        public function getName()
        {
            return $this->name;
        }
        
        public function setName($name)
        {
            $this->name = $name;
        }
        
        //email
        public function getEmail()
        {
            return $this->email;
        }
        
        public function setEmail($email)
        {
            $this->email = $email;
        }
        
        //subject
        public function getSubject()
        {
            return $this->subject;
        }
        
        public function setSubject($subject)
        {
            $this->subject = $subject;
        }
        
        //body
        public function getBody()
        {
            return $this->body;
        }
        
        public function setBody($body)
        {
            $this->body = $body;
        }
        
        //your_email
        public function getYour_email()
        {
            return $this->your_email;
        }
        
        public function setYour_email($your_email)
        {
            $this->your_email = $your_email;
        }
        
        //password
        public function setPassword($password)
        {
            $this->password = $password;
        }
        
        public function getPassword()
        {
            return $this->password;
        }
        
        //Identification
        public function mySettings($my_email, $password)
        {
            $this->your_email = $my_email;
            $this->password = $password;
        }
        
        //SMTP Settings
        public function SMTP_Settings($host, $port)
        {
            $this->mail->isSMTP();
            $this->mail->Host = $host;  //"smtp.gmail.com";
            $this->mail->SMTPAuth = true;
            $this->mail->Username = $this->your_email; //enter you email address
            $this->mail->Password = $this->password; //enter you email password
            $this->mail->Port = $port; //465;
            $this->mail->SMTPSecure = "ssl";
        }
        
        //Email Settings
        public function Email_Settings()
        {
            $this->mail->isHTML(true);
            $this->mail->setFrom($this->email, $this->name);
            $this->mail->addAddress($this->email); //enter you email address
            $this->mail->Subject = ($this->subject);
            $this->mail->Body = $this->body;
        }
        
        //Email
        public function send()
        {
            return $this->mail->send();
        }
    }
    
    $e =new Email('HabibAroua','habibha.aroua82@gmail.com','Hello world','I love you bitch');
    $e->mySettings('habib.aroua@sesame.com.tn','habib.aroua@hotmail.framour88');
    $e->SMTP_Settings('smtp.gmail.com',465);
    $e->Email_Settings();
    if($e->send())
    {
        echo "Sent";
    }
    else
    {
        echo "Error";
    }
?>