<?php 

interface HewanInterface {
    public function getJenis();
}

class Kambing implements HewanInterface {
    public function getJenis() {
        return "Herbivora";
    }
}

class Singa implements HewanInterface {
    public function getJenis() {
        return "Karnivora";
    }
}

class Sumanto implements HewanInterface {
    public function getJenis() {
        return "Gilaaa";
    }
}

$sumanto = new Sumanto();
echo $sumanto->getJenis();