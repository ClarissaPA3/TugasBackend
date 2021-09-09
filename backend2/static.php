<?php
    class laptop {
        // static Property
        public static $harga;
        public static $laba;
 
        // static method
        public static function beli(){
            return "Thoshiba";
        }
 
        // Mengakses Property dan method pada class sendiri
        public static function jual(){
            return "Laba :".self::$laba." - Nama Laptop ".self::beli();
        }
    }
 
    // Set static property
    laptop::$harga='5.500.000';
    laptop::$laba='200.000';
 
    // menampilkan static property
    echo "Harga Jual: Rp".laptop::$harga;
    echo "<br>";
    echo laptop::beli();
    echo "<br>";
    // menampilkan static method dengan menggunakan seft
    echo laptop::jual();
 
?>