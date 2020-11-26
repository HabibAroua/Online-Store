<?php

    //require_once('../database/Connection.php');
    require_once('../models/Category.php');
    require_once('../models/Product.php');
    require_once('../models/User.php');
    require_once('CategoryController.php');
    require_once('ProductController.php');
    require_once('UserController.php');
    
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
        $p = new Product();
        $productCpntroller = new ProductController();
        switch($action)
        {
            case 'insert' : if((isset($_POST['reference'])) && (isset($_POST['label'])) && (isset($_POST['price']))
                                && (isset($_POST['amount'])) && (isset($_POST['picture'])) && (isset($_POST['description']))
                                && (isset($_POST['idCat'])))
                            {
                                $p->setReference($_POST['reference']);
                                $p->setLabel($_POST['label']);
                                $p->setPrice($_POST['price']);
                                $p->setAmount($_POST['amount']);
                                $p->setPicture($_POST['picture']);
                                $p->setDescription($_POST['description']);
                                $p->setIdCat($_POST['idCat']);
                                $productCpntroller->setProduct($p);
                                $productCpntroller->add();
                            }
                            else
                            {
                                echo "Error : There are 7 inputs !!";
                            }
            break;
            case 'delete' : if(isset($_POST['reference']))
                            {
                                $p->setReference($_POST['reference']);
                                $productCpntroller->setProduct($p);
                                $productCpntroller->delete();
                            }
                            else
                            {
                                echo "There are only one input !!";
                            }
            break;
            case 'update' : if((isset($_POST['reference'])) && (isset($_POST['label'])) && (isset($_POST['price']))
                                && (isset($_POST['amount'])) && (isset($_POST['picture'])) && (isset($_POST['description']))
                                && (isset($_POST['idCat'])) && (isset($_POST['ref'])))
                            {
                                $p->setReference($_POST['reference']);
                                $p->setLabel($_POST['label']);
                                $p->setPrice($_POST['price']);
                                $p->setAmount($_POST['amount']);
                                $p->setPicture($_POST['picture']);
                                $p->setDescription($_POST['description']);
                                $p->setIdCat($_POST['idCat']);
                                $productCpntroller->setProduct($p);
                                $productCpntroller->update($_POST['ref']);
                            }
                            else
                            {
                                echo "Error : there are 8 inputs !!";
                            }
            break;
            case 'getAll' :
            break;
        }
    }
    
    function User($action)
    {
        $user = new User();
        $userController = new UserController();
        switch($action)
        {
            case 'insert' : if
                            (
                                (isset($_POST['login'])) &&
                                (isset($_POST['password'])) &&
                                (isset($_POST['first_name'])) &&
                                (isset($_POST['last_name'])) &&
                                (isset($_POST['date_of_birth'])) &&
                                (isset($_POST['email'])) &&
                                (isset($_POST['telephone']))&&
                                (isset($_POST['address'])) &&
                                (isset($_POST['nationality']))
                            )
                            {
                                $user->setLogin($_POST['login']);
                                $user->setPassword($_POST['password']);
                                $user->setFirst_name($_POST['first_name']);
                                $user->setLast_name($_POST['last_name']);
                                $user->setDate_of_birth($_POST['date_of_birth']);
                                $user->setEmail($_POST['email']);
                                $user->setTelephone($_POST['telephone']);
                                $user->setAddress($_POST['address']);
                                $user->setNationality($_POST['nationality']);
                                $userController->setUser($user);
                                $userController->insert();
                            }
                            else
                            {
                                echo "There are 9 POST !!";
                            }
            break;
            case 'update' : echo "Update User";
            break;
            case 'delete' : echo "Delete";
            break;
            case 'getAll' : echo "Get all";
            break;
        }
        
    }
    
    if(isset($_GET['class']))
    {
        if(isset($_GET['action']))
        {
            switch($_GET['class'])
            {
                case 'Category' : Category($_GET['action'],$categoryController);
                break;
                case 'Product' : Product($_GET['action']);
                break;
                case 'User' : User($_GET['action']);
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