<?php 

//visibilitas private
//hanya bisa diakses di lingkup class saja (di lingkup object tidak bisa)

class Mobil
{
    private $roda = 4;
    private function jalan() 
    {
        echo 'Mobil Berjalan';
    }
}

$avanza = new Mobil();
//syntax dibawah akan error
//dikarenakan visibilitas jalan() adalah private
echo $avanza->jalan();
echo PHP_EOL;
//syntax dibawah akan error
//dikarenakan visibilitas roda() adalah private
echo $avanza->roda;
echo PHP_EOL;

//visibilitas protected
//Hanya bisa digunakan di sesama tipe class atau ketika(tetap tidak bisa di lingkup object)

class Motor 
{
    protected $roda = 2;

    protected function sytem() 
    {
        echo 'Motor Melaju';
    }
}

use Motor as GlobalMotor;

class Honda extends GlobalMotor 
{
    public function motorJalan() {
        echo $this->sytem();
    }
}

$honda = new Honda();
echo $honda->motorJalan();


?>