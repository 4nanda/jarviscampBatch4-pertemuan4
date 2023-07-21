<?php
// membuat class Kendaraan
class Kendaraan
{
    // deklarasi variable (property)
    public $merk, $tipe;

    // membuat method construct
    public function __construct($merk, $tipe) {
        $this->merk = $merk;
        $this->tipe = $tipe;
    }
    // membuat method
    public function brosurMobil(){
        echo "Kendaraan ini bertipe $this->tipe";
    }
}

class Mesin extends Kendaraan{
    public $jenisMesin;
    public$kapasitasMesin;
    
    public function __construct($merk, $tipe, $jenisMesin, $kapasitasMesin) {
        parent::__construct($merk, $tipe);
        $this->jenisMesin = $jenisMesin;
        $this->kapasitasMesin = $kapasitasMesin;
    }
    
    public function brosurLengkap(){
        echo "Kendaraan ini bertipe $this->tipe";
    }
}

$fortuner = new Kendaraan("Fortuner FRZ", "SUV", "Diesel", "4000cc");
echo $fortuner->merk;
echo '<br/>';
$fortuner->brosurMobil();
echo '<br/>';

$ionic5 = new Kendaraan("Ionic 5", "Electric", "Listrik", "2500cc");
echo $ionic5->merk;
echo '<br/>';
$ionic5->brosurMobil();
echo '<br/>';

$bmw = new Kendaraan("BMW M5", "Sedan", "Bensin", "3500cc");
echo $bmw->merk;
echo '<br/>';
$bmw->brosurMobil();