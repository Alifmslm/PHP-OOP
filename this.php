<?php 

class Printer 
{
    private $content;

    public function setContent($content) {
        $this->content = "$content";
    }

    public function cetak() {
        return $this->content;
    }
}

$printer1 = new Printer();
$printer1->setContent("Aku Printer 1");
echo $printer1->cetak();
echo PHP_EOL;

$printer2 = new Printer();
$printer2->setContent("Aku Printer 2");
echo $printer2->cetak();
echo PHP_EOL;