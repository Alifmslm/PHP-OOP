<?php

abstract class Connection {
    abstract public function connect($database, $username, $password, $host = 'localhost');
}


class MySQLConnection extends Connection {
    public function connect($database, $username, $password, $host = 'localhost') {
        //bisa diisi dengan logika sesuai dengan apa yang kita pengen
    }
}

//Sebuah child class dari abstract class WAJIB NULIS ABSTRACT METHOD
class PostgreSQLConnection extends Connection {
    public function connect($database, $username, $password,$host = 'localhost') {
       //bisa diisi dengan logika sesuai dengan apa yang kita pengen 
    }
}

//Sebuah child class dari abstract class WAJIB NULIS ABSTRACT METHOD
class OracleConnection extends Connection {
    public function connect($database, $username, $password,$host = 'localhost') {
        //bisa diisi dengan logika sesuai dengan apa yang kita pengen
    }
}

