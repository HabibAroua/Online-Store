<?php
    header("X-XSS-Protection: 0");
    $a = htmlspecialchars($_GET['a'] , ENT_QUOTES, 'UTF-8');
    echo $a;
?>