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

//bisa kita anggap seperti template
class mobil3 {
    //class dengan property
    public $pintu;
    public $roda;

    public function jalan() {
        echo "Mobil Berjalan" . PHP_EOL;
    }
}

//harus diinisialisasi seperti dibawah jika ingin menampilkan hasil/value-nya
$avanza = new Mobil3();
$avanza->roda = 4;

echo $avanza->jalan();

class Koneksi {
    public function connect
        ($username, $password, $host = 'localhost', $port = 3306) {
            echo "$username, $password, $host, $port" . PHP_EOL;
    }
}

$database = new Koneksi();
$database->connect('root', '');



?>