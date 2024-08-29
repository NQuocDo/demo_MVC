<?php
    class  ProductController
    {
        public static function List()
        {
            $data=0;
            require_once('./view/list.php'); 
        }
        public static function Create(){
            $data1=[1,2,3,4,5];
            require_once('./view/create.php');
        }
    }

?>