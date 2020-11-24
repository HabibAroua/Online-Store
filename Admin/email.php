<?php
    $to = "habib.aroua@sesame.com.tn";
    $subject = "My subject";
    $txt = "Hello world!";
    $headers = "From: habibha.aroua82@gmail.com";

    mail($to,$subject,$txt,$headers);
    echo "sent";
?>