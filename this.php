<?php 

class Printer 
{
    private $content;

    public function setContent($content) {
        $this->content = "$content";
    }

    public function cetak() {
        echo $this->content;
    }
}

$printer1 = new Printer();
$printer1->setContent("Aku Printer 1");
$printer1->cetak();
echo PHP_EOL;

$printer2 = new Printer();
$printer2->setContent("Aku Printer 2");
$printer2->cetak();
echo PHP_EOL;