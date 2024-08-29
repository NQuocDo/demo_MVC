<?php
    include_once('model/db.php');
    
    class  ProductController{    
        public static function List(){
            $data=0;
            require_once('./view/list.php'); 
        }
        public static function Create(){
            $dataNumber=db::arrayNumber();
            require_once('./view/create.php');
        }
        public static function Detail(){
            $dataArrayDS=db::layAll();
            require_once('./view/detail.php');
        }
        public static function Edit(){
            $dataArrayMSSV=db::layMSSV();
            require_once('./view/edit.php');
        }
    }

?>