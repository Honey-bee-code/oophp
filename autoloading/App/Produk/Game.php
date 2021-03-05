<?php

class Game extends Produk implements InfoProduk {

    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        // panggil construct parent
        parent::__construct($judul, $penulis, $penerbit, $harga);
        $this->waktuMain = $waktuMain;
    }

    public function setDiskon($diskon){
        $this->diskon = $diskon;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getlabel()} (Rp. {$this->harga}) ";
        
        return $str;
    }

    public function getInfoProduk() {
        $str = "Game : ".$this->getInfo()." ~ {$this->waktuMain} jam.";
        return $str;
    }
}