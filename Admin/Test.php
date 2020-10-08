<?php
    require ('../app/database/Connection.php');
    //Models
    require ('../app/models/Category.php');
    //Controllers
    require_once('../app/controllers/CategoryController.php');
    
    global $categoryController;
    echo '<br>'.$categoryController->getAll();
?>