<?php

class Produk
{
    public $judul,
        $penulis,
        $penerbit,
        $harga;

    public function __construct($judul = "juudul", $penulis = "penulis", $penerbit = "penerbit", $harga = "harga")
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->judul, $this->penulis, $this->penerbit, $this->harga";
    }
}

$produk1 = new Produk("Naruto", "Masashi kisimoto", "shonen jump", "Gratis");
$produk2 = new Produk("Uncharted", "Neil druckman", "Sony computer", 222222);
$produk3 = new Produk("gameing");

echo "komik =" . $produk1->getLabel();
echo "<br>";
echo "Gambe = " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
