<?php
class Kucing{
    public $nama;
    public static $jumlah_kucing = 0;

    public function __construct($nama){
        self::$jumlah_kucing++;
        $this->nama = $nama;
    }

    public static function getJumlahKucing(){
        echo "<br/>Jumlah kucing = " . self::$jumlah_kucing;
    }
}

$oyen = new Kucing("oyen");
Kucing::getJumlahKucing();

$bleki = new Kucing("bleki");
Kucing::getJumlahKucing();