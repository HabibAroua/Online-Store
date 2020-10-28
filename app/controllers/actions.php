<?php

    //require_once('../database/Connection.php');
    require_once('../models/Category.php');
    require_once('../models/Product.php');
    require_once('CategoryController.php');
    require_once('ProductController.php');
    
    //action function of each class
    
    function Category($action,$c)
    {
        $cat = new Category();
        $c = new CategoryController();
        switch($action)
        {
            case 'insert' : $cat->setName($_POST['name']);
                            $cat->setDescription($_POST['description']);
                            $c->setCategory($cat);
                            $c->insert();                
            break;
            case 'delete' : $cat->setId($_POST['id']);
                            $c->setCategory($cat);
                            $c->delete();
            case 'update' : $cat->setId($_POST['id']);
                            $cat->setName($_POST['name']);
                            $cat->setDescription($_POST['description']);
                            $c->setCategory($cat);
                            $c->update();
            break;
            case 'getAll' : echo $c->getAllJSON();
            break;
            default : echo "Error, plase enter the right parameters";
            break;
        }
    }
    
    function Product($action)
    {
        $productCpntroller = new ProductController();
        switch($action)
        {
            case 'insert' : echo "Add";
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
                case 'Product' : Product($_GET['action']);
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