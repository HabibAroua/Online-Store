<?php
    require_once('../app/security/session.php');
    $s = new Session();
    $s->logOut();
?>