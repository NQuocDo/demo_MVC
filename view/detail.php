<?php
    include_once('controller/productController.php');
    if(isset($dataArrayDS)){
        for($i=0;$i<count($dataArrayDS);$i+=1)
        {
            echo "Sinh viên ".$dataArrayDS[$i]['id']." ".$dataArrayDS[$i]['name']." ".$dataArrayDS[$i]['age']."t".'<br>';
        }
    }else{
        echo "khong tìm thấy mảng";
    }
?>