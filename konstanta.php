<?php 

class Lingkaran {
    public const PI = 3.14;
    public static function luas($jari) {
        echo self::PI * $jari * $jari;
    }
}

//cara lama dipakai jika si property/method tidak ad keyword static
$lingkaran = new lingkaran();
echo Lingkaran::PI;
echo PHP_EOL;
echo $lingkaran->luas(7);
echo PHP_EOL;


//contoh static

//const bisa dipanggil seperti dibawah
echo Lingkaran::PI;
echo PHP_EOL;
echo Lingkaran::luas(7);
echo PHP_EOL;

