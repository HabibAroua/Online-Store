<?php
    echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
    echo "<br>";
    echo password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
    echo "<br>";
    $hash = password_hash("rasmuslerdorf", PASSWORD_DEFAULT);
    if (password_verify('rasmuslerdorf', $hash))
    {
        echo 'Le mot de passe est valide !';
    }
    else
    {
        echo 'Le mot de passe est invalide.';
    }
?>