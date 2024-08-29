<?php
    include_once('controller/productController.php');
    $uri=explode('/',$_SERVER['REQUEST_URI']);

    if($uri[2]=="product"){
        $controller= new ProductController();

        if($uri[3]=="list"){
            $controller::List();
        }elseif($uri[3]=="create"){
            $controller::Create();
        }elseif($uri[3]=="detail"){
            $controller::Detail();
        }elseif($uri[3]=="edit"){
            $controller::Edit();
        }
        
    }

?>
