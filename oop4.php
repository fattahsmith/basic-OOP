<?php

class Perlengkapan {
    public $seragam;
    public $buku;
    public function __construct() {
        $this->seragam = "elektronik <br/>";
    }
     
    public function __destruct() {
        $this->buku = "naissssssssssssss <br/>";
    }
    public function pesanPerlengkapan() {
        $this->seragam = new Perlengkapan();
    }
}

class Isian {
    public $tv;
    public $laptop;
    public $motherboard;
    public $mouse;
    public $keyboard;

    public function __construct($tv = 1, $laptop = 1, $motherboard = 1, $mouse = 2, $keyboard = 2) {
        $this->tv= $tv;
        $this->laptop = $laptop;
        $this->motherboard = $motherboard;
        $this->mouse = $mouse;
        $this->keyboard = $keyboard;
    }
}

$perlengkapan = new Perlengkapan();
echo "Perlengkapan: " . $perlengkapan->seragam . "<br/>";

$isian = new Isian();
echo "tv: " . $isian->tv . "<br/>";
echo "laptop: " . $isian->laptop . "<br/>";
echo "motherboard: " . $isian->motherboard . "<br/>";
echo "mouse: " . $isian->mouse . "<br/>";
echo "keyboard: " . $isian->keyboard . "<br/><br/>";

$isian = new Isian(2, 3, 1, 9, 2);
echo "Method <br/><br/>";
echo "tv: " . $isian->tv . "<br/>";
echo "laptop: " . $isian->laptop . "<br/>";
echo "motherboard: " . $isian->motherboard . "<br/>";
echo "mouse: " . $isian->mouse . "<br/>";
echo "keyboard: " . $isian->keyboard . "<br/>";
