<?php 

class mobil {
  //ini class  
}

class mobil2 {
    //class dengan function
    public function jalan() {
        echo "Mobil berjalan";
    }
}

class mobil3 {
    //class dengan property
    public $pintu;
    public $roda;

    public function jalan() {
        echo "Mobil Berjalan";
    }
}

$avanza = new Mobil3();
$avanza->roda = 4;

echo $avanza->jalan();


?>