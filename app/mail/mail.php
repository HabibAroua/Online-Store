<?php
    require_once('PhpMailer/_lib/class.phpmailer.php');
    
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = '465';
    $mail->IsHTML();
    $mail->Username = 'habibha.aroua82@gmail.com';
    $mail->Password = 'My Password';
    $mail->SetFrom('no-reply@howcode.org');
    $mail->Subject = 'Hello World';
    $mail->Body = 'A test email !';
    $mail->AddAddress('habib.aroua@sesame.com.tn');
    
    $mail->Send();
?>