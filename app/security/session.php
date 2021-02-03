<?php

    class Session
    {
        public function connect($login,$password,$page,$s)
        {
		    session_start ();
		    setcookie('login', $login, time() + $s);
		    setcookie('password', $password, time() + $s);
		    $_SESSION['login'] = $login;
		    $_SESSION['password'] = $password;
		    header ("location: $page");
        }
        
        public function afterConnection()
        {
            session_start ();
            if (isset($_SESSION['login']) && isset($_SESSION['password']) && isset($_COOKIE['login']) )
            {
				
            }
            else
            {
                header ('location: index.php?page=login');
            }
        }
        
        public function logOut()
        {
            session_start ();
            session_unset ();
            session_destroy ();
            header ('location: index.php?page=login');
        }
        
        public function test()
        {
            echo "test session";
        }
    }
?>