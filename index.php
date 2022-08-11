<?php

class Produk
{
    public $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 1;

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}


// $produk1 = new Produk();
// $produk1->judul = "naruto";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul= "uncaharted";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masashi Kisimoto";
$produk3->penerbit = "shonen jump";
$produk3->harga = "gratis";

$produk4 = new Produk();
$produk4->judul = "uncharted";
$produk4->penulis = "neil druckmann";
$produk4->penerbit = "Sony computer";
$produk4->harga = 222222;

echo "komik =" . $produk3->getLabel();
echo "<br>";
echo "Gambe = " . $produk4->getLabel();
?>

<html>

<body>
    <!-- <h1>Testing</h1> -->

</body>

</html>