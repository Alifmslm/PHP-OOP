<?php

class Hewan
{
    private $jenis;

    public function setJenis($jenis) {
        $this->jenis = $jenis;
    }

    public function getJenis() {
        return $this->jenis;
    }

}

class Kambing extends Hewan {}
class Singa extends Hewan {}
class Harimau extends Hewan {}

$kambing = new Kambing();
$kambing->setJenis("Herbivora");
echo $kambing->getJenis();
echo PHP_EOL;

$singa = new Singa();
$singa->setJenis("Karnivora");
echo $singa->getJenis();
echo PHP_EOL;

$harimau = new Harimau();
$harimau->setJenis("Karnivora");
echo $harimau->getJenis();

