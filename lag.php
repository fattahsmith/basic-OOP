<?php
class Produk
{
    public $jenis;
    public $merek;
    public $stok;

    public function pesanProduk()
    {
        $this->stok = $this->stok - 1;
    }
    public function borongProduk($jumlah)
    {
        if ($jumlah <= $this->stok) {
            $this->stok = $this->stok - $jumlah;
        } else {
            echo "<br> stok tidak mencukupi";
            echo "<br> stok tersisa: " . $this->stok;
        }
    }


    public function cekStok()
    {
        return "sisa stok: " . $this->stok . "<br>";
    }
}

$produk01 = new Produk();
$produk01->jenis = "televisi";
$produk01->merek = "samsung";
$produk01->stok = 50;

echo $produk01->cekStok();

$produk01->borongProduk(5);
echo $produk01->cekStok();

$produk01->borongProduk(10);
echo $produk01->cekStok();

$produk01->borongProduk(62);
echo $produk01->cekStok();
