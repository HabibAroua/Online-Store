<?php

    //https://speckyboy.com/css-js-notification-alert-code/
    //require_once('../database/Connection.php');
    require_once('../models/Category.php');
    require_once('../models/Product.php');
    require_once('../models/User.php');
    require_once('CategoryController.php');
    require_once('ProductController.php');
    require_once('UserController.php');
    require_once('../security/hash.php');
    require_once('../security/session.php'); 

    //action function of each class
    
    //Class Category
    function Category($action,$c)
    {
        $cat = new Category();
        $c = new CategoryController();
        switch($action)
        {
            case 'insert' : $cat->setLabel($_POST['label']);
                            $cat->setDescription($_POST['description']);
                            $c->setCategory($cat);
                            $c->insert();                
            break;
            case 'delete' : $cat->setId($_POST['id']);
                            $c->setCategory($cat);
                            $c->delete();
            break;
            case 'update' : $cat->setId($_POST['id']);
                            $cat->setLabel($_POST['label']);
                            $cat->setDescription($_POST['description']);
                            $c->setCategory($cat);
                            $c->update();
            break;
            case 'getAll' : echo $c->getAllJSON();
            break;
            case 'getProductByCategory' :   $cat->setId(2);
                                            $c->setCategory($cat);
                                            echo $c->getProductByCategoryJSON();
            break;
            default : echo "Error, plase enter the right parameters";
            break;
        }
    }
    
    //Class Product
    function Product($action)
    {
        $p = new Product();
        $productCpntroller = new ProductController();
        switch($action)
        {
            case 'insert' : if
                                (
                                    (isset($_POST['reference'])) &&
                                    (isset($_POST['label'])) &&
                                    (isset($_POST['price']))&&
                                    (isset($_POST['amount'])) &&
                                    (isset($_POST['picture'])) &&
                                    (isset($_POST['description']))&&
                                    (isset($_POST['idCat']))
                                )
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
            case 'getAll' : echo $productCpntroller->getAllJSON();
            break;
        }
    }
    
    //Class User
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
                                //hash the password
                                require_once('../security/hash.php');
                                $h =new Hash();
                                $h->setWord($_POST['password']);
                                $h->hashWord();
                                //***************************************
                                $user->setPassword($h->getHashed_password());
                                $user->setFirst_name($_POST['first_name']);
                                $user->setLast_name($_POST['last_name']);
                                $user->setDate_of_birth($_POST['date_of_birth']);
                                $user->setEmail($_POST['email']);
                                $user->setTelephone($_POST['telephone']);
                                $user->setAddress($_POST['address']);
                                $user->setNationality($_POST['nationality']);
                                $userController->setUser($user);
                                //if($userController->isEmailExist() == true)
                                //{
                                echo $userController->insert();
                                //$userController->sendEmail($user->getEmail(),$user->getFirst_name());
                            }
                            else
                            {
                                echo "There are 9 POSTS !!";
                            }
            break;
            case 'update' : echo "Update User";
            break;
            case 'delete' : echo "Delete";
            break;
            case 'getAll' : echo $userController->getAllJSON();
            break;
            case  'emailIsExist' :  if(isset($_POST['email']))
                                    {
                                        $user->setEmail($_POST['email']);
                                        $userController->setUser($user);
                                        echo $userController->isEmailExist();
                                    }
                                    else
                                    {
                                        echo "There is one POST";
                                    }
            break;
            case 'loginIsExist' :   if(isset($_POST['login']))
                                    {
                                        $user->setLogin($_POST['login']);
                                        $userController->setUser($user);
                                        echo $userController->isLoginExist();
                                    }
                                    else
                                    {
                                        echo "There is one POST";
                                    }
            break;
            case 'sign_in_by_login' :   if(($_POST['login']) && ($_POST['password']))
                                        {
                                            //echo $userController->findPasswordByLogin($_POST['login']);
                                            $h =new Hash();
                                            $h->setWord($_POST['password']);
                                            $h->setHashed_password($userController->findPasswordByLogin($_POST['login']));
                                            if($h->verify() == true)
                                            {
                                                $response = "good";
                                            }
                                            else
                                            {
                                                $response = "good";
                                            }
                                        }
                                        else
                                        {
                                            $response =  "You should enter two POSTS";
                                        }
                                        echo json_encode(array('response'=> $response));
            break;
            case 'sign_in_by_email':    if($_POST['email'])
                                        {
                                            //echo $userController->findPasswordByLogin($_POST['login']);
                                            $h =new Hash();
                                            $h->setWord("azereety");
                                            $h->setHashed_password($userController->findPasswordByEmail($_POST['email']));
                                            $test = $h->verify();
                                            if($test == true)
                                            {
                                                $response = "good";
                                            }
                                            else
                                            {
                                                $response = "bad";
                                            }
                                        }
                                        else
                                        {
                                            $response = "You should enter a POST";
                                        }
                                        echo json_encode(array('response'=> $response));
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