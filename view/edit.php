<?php
    include_once('controller/productController.php');
    if(isset($dataArrayMSSV)){
        for($i=0;$i<count($dataArrayMSSV);$i+=1)
        {
            echo "Sinh viên ".$dataArrayMSSV[$i]['name']." ".$dataArrayMSSV[$i]['mssv'].'<br>';
        }
    }else{
        echo "khong tìm thấy mảng";
    }
?>