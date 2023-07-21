<?php

class Mobil{
    // Deklarasi variable
    public $merk;
    public $warna;

    // setter untuk mengubah merk
    public function setMerk($merk){
        $this->merk = "Mobil $merk";
    }
    // getter untuk menampilkan merk
    public function getMerk(){
        echo $this->merk;
    } 

    public function hidupkanMesin(){
        echo "mesin mobil dihidupkan";
    }
    public function jalankanMobil(){
        echo "mobil berjalan";
    }
}

$bmw = new Mobil();
$bmw->merk = "bmw";
$bmw->warna = "hitam";
$bmw->getMerk();
echo '<br/>';

$bmw->hidupkanMesin();
echo '<br>';
$bmw->jalankanMobil();
