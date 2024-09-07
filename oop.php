<?php
 class barang{
     public $welcome = "001";
     public $meja = "kursi";
     public $pc = "400000";
     public $laptop;
     public $jam;

     public function __construct(){
        $this->welcome = "ini adalah barang barang yang tersedia";
        $this->meja = "-meja";
        $this->pc = "-pc";
        $this->laptop = "-laptop";
        $this->jam = "-jam";
     }

     public function NamaBarang(){
        return "wellll....";
     }
    

 }

$barang = new barang();
echo $barang->welcome;
echo "<br>";
echo $barang->meja;
echo "<br>";
echo $barang->pc;
echo "<br>";
echo $barang->laptop;
echo "<br>";
echo $barang->jam;
echo "<br>";
echo $barang->NamaBarang();