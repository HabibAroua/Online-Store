<?php

    require_once('../database/Connection.php');
    require_once('../models/Category.php');
    require_once('CategoryController.php');
    $c = new CategoryController();
    //action
    
    function Category($action)
    {
        $c = new Category();
        switch($action)
        {
            case 'insert' : $c->insert();
                break;
        }
    }
    
    if(isset($_GET['class']))
    {
        if($_GET['action'])
        {
            switch($_GET['class'])
            {
                case 'Category' : Category($_GET['action']);
                    break;
            }
        }
        else
        {
            echo "Enter a valid action";
        }
    }
    else
    {
        echo "Please enter Class name";
    }

?>