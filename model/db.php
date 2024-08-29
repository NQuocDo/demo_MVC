<?php
    class db{
        public static function arrayNumber(){
            $soNguyen=[1,2,3,4,5,6,7,8,9];
            return $soNguyen;
        }
        public static function layAll(){
            $students = [
                ['id' => 1, 'name' => 'Nguyễn Quốc Đô', 'age' => 20],
                ['id' => 2, 'name' => 'Đặng Khánh Đông', 'age' => 20],
                ['id' => 3, 'name' => 'Nguyễn Ngọc Hoàng', 'age' => 21],
                ['id' => 4, 'name' => 'Nguyễn Bá Kiệt', 'age' => 21],
            ];
            return $students;
        }
        public static function layMSSV(){
            $students = [
                ['name' => 'Nguyễn Quốc Đô', 'mssv' => 306221014],
                ['name' => 'Đặng Khánh Đông', 'mssv' => 306221015],
                ['name' => 'Nguyễn Ngọc Hoàng', 'mssv' => 306221023],
                ['name' => 'Nguyễn Bá Kiệt', 'mssv' => 306221032],
            ];
            return $students;
        }

    }
?>