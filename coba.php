<?php

class Data {
    public $nis;
    public $nama;
    public $alamat;

    public function __construct($nis, $nama, $alamat) {
        $this->nis = $nis;
        $this->nama = $nama;
        $this->alamat = $alamat;
    }

    public function getNis() {
        return $this->nis;
    }

    public function getNama() {
        return $this->nama;
    }

    public function getAlamat() {
        return $this->alamat;
    }
}

class Diri {
    public function printData($data) {
        echo "NIS: " . $data->getNis() . "<br/>";
        echo "Nama: " . $data->getNama() . "<br/>";
        echo "Alamat: " . $data->getAlamat() . "<br/>";
    }
}

$data = new Data(123456, "Fattah Smith", "Jakarta");
 
  $Diri = new Diri();

  $Diri->printData($data);
