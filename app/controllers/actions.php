<?php

    //require_once('../database/Connection.php');
    require_once('../models/Category.php');
    require_once('CategoryController.php');
    
    //action function of each class
    
    function Category($action,$c)
    {
        $cat = new Category();
        switch($action)
        {
            case 'insert' : $cat->setName("Habib");
                            $cat->setDescription("l'information de l'informatique");
                            $c->setCategory($cat);
                            $c->insert();                
            break;
        }
    }
    
    if(isset($_GET['class']))
    {
        if($_GET['action'])
        {
            switch($_GET['class'])
            {
                case 'Category' : Category($_GET['action'],$categoryController);
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