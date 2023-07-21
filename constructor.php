<?php
class Laptop{
    public $merk;
    public $processor;
    public $memori;

    public function __construct($merk, $procie, $memori){
        $this->merk = $merk;
        $this->processor = $procie;
        $this->memori = $memori;
    }
    public function desc(){
        return "Merk laptop ini adalah $this->merk, dengan processor $this->processor, dan RAM $this->memori";
    }
}

$lenovo = new Laptop("Dell", "Intel Core i5", "8 GB");
echo $lenovo->desc();
