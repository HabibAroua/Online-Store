<?php
    $con = mysqli_connect("localhost","root","","right1");
    if(mysqli_connect_errno())
    {
        echo "faild to connect",mysqli_connect_errno();
    }
    
    $fname = "";
    $lname = "";
    $em = "";
    $em2 = "";
    $password = "";
    $password2 = "";
    $date = "";
    $error_array = "";
    
    if(isset($_POST['reg_button']))
    {
        $fname = strip_tags($_POST['reg_fname']);
        $fname = str_replace('','',$fname);
        $fname = ucfirst(strtolower($fname));
        
        $lname = strip_tags($_POST['reg_lname']);
        $lname = str_replace('','',$lname);
        $lname = ucfirst(strtolower($lname));
        
        $em = strip_tags($_POST['reg_email']);
        $em = str_replace('','',$em);
        $em = ucfirst(strtolower($em));
        
        $em2 = strip_tags($_POST['reg_email2']);
        $em2 = str_replace('','',$em2);
        $em2 = ucfirst(strtolower($em2));
        
        $password = strip_tags($_POST['reg_password']);
        $password2 = strip_tags($_POST['reg_password2']);
        
        $date = date("y-m-d");
        
        if($em == $em2)
        {
            echo "<script>alert('Email are matched');</script>";
        }
        else
        {
            echo "<script>alert('Email are not matched');</script>";
        }
    }

?>
<!Doctype html>
<html>
    <head>
        <title>This is PHP</title>
    </head>
    <body>
        <form action="" method="POST">
            <input type="text" name="reg_fname" placeholder="Enter your first name" /><br />
            <input type="text" name="reg_lname" placeholder="Enter your last name" /><br />
            <input type="email" name="reg_email" placeholder="Enter your email" /><br />
            <input type="email" name="reg_email2" placeholder="Confirm you email" /><br />
            <input type="password" name="reg_password" placeholder="Enter your password" /><br />
            <input type="password" name="reg_password2" placeholder="Confirm your password" /><br />
            <input type="submit" name="reg_button" value="Register" />
        </form>
    </body>
</html>