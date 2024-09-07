<?php
class Produk {
    private $merek;
    
    public function set_merek($merek) {
        $this->merek = $merek;
    }
    
    public function get_merek() {
        return $this->merek;
    }
}

$produk01 = new Produk();
$produk01->set_merek("samsung");

echo $produk01->get_merek();
