<?php
    $c = new CategoryController();
    //action
    if (isset($_GET['action']))
    {
        switch($_GET['action'])
        {
            case 'insertCategory' : $c->insert();
                break;
        }
    }
    else
    {
        echo "Error";
    }

?>