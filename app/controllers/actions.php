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