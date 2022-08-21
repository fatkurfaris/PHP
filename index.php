<?php

require_once 'App/Init.php';

// $produk1 = new Komik("Narutooo", "Masashi kisimoto", "shonen jump", "Gratis", 100);
// $produk2 = new Game("Uncharted", "Neil druckman", "Sony computer", 250000, 50);


// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

new ServiceUser();
echo "<hr>";
new ProdukUser();

// new App\Service\User();
// echo "<hr>";
// new App\Produk\User();