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
    public $roda = 4;

    public function jalan() {
        return "Mobil Berjalan" . PHP_EOL;
    }
}

//harus diinisialisasi seperti dibawah jika ingin menampilkan hasil/value-nya
$avanza = new Mobil3();
$avanza->roda = 4;

echo $avanza->jalan();

class Koneksi {
    public function connect
        //variable username & password adalah mandatory parameter
        //mandatory parameter adalah parameter yg tidak memiliki default value
        //mandatory harus diberikan value saat dieksekusi
        ($username, $password, $host = 'localhost', $port = 3306) {
            echo "$username, $password, $host, $port" . PHP_EOL;
    }
}

$database = new Koneksi();
$database->connect('root', '');



?>