<?php

require_once 'App/init.php';


// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

// $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();

// echo "<hr>";


// memberi alias untuk namespace
use App\Produk\User as ProdukUser;
use App\Service\User;

new ProdukUser();
echo "<br>";
new User();
