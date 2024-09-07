<?php
class barang
{
    public $welcome = "001";
    public $meja = "kursi";
    public $pc = "400000";


    public function PesanBarang()
    {
        return "otw.......";
    }
}

$item = new barang();
$item ->welcome = "001";
$item ->meja = "kursi";
$item ->pc = "300000";
$item ->laptop = "laptop";

echo $item->welcome;
echo "<br>";
echo $item->meja;
echo "<br>";
echo $item->pc;
echo "<br>";
echo $item ->PesanBarang();