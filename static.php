<?php 

//Static
//Konsep static berbeda dengan cara yg classic oop, 
//static hanya perlu menambhakan keyword static di attribute/method
//kemudian panggil dengan cara seperti ini Singa::$KAKI

class Singa {
    public static $KAKI =4;
    public static function kaki1() {
        //pemanggilan menggunakan static
        echo Singa::$KAKI;
    }
    public static function kaki2() {
        //static dibawah sama seperti $this
        echo static::$KAKI;
    }
    public static function kaki3() {
        //self dibawah sama seperti $this
        echo self::$KAKI;
    }
    
}

//pemanggilan menggunakan static
echo Singa::kaki1();
echo PHP_EOL;
//pemanggilan menggunakan static
echo Singa::kaki2();
echo PHP_EOL;
//pemanggilan menggunakan static
echo Singa::kaki3();
echo PHP_EOL;


?>