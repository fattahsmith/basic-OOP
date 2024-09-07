<?php
class Circle {
    private $ukuran;
    public function __construct($ukuran) {
        $this->ukuran = $ukuran;
    }
    public function getLuas() {
        return pi() * $this->ukuran * $this->ukuran;
    }
}

class Rectangle {
    private $panjang;
    private $lebar;

    public function __construct($panjang,$lebar) {
     $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function getLuas() {
return $this->panjang * $this->lebar;
    }
}
class Triangle {
      private $alas;
    private $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function getLuas() {
        return 1 * $this->alas * $this->tinggi;
    }
}
  $lingkaran = new Circle(7);
$persegiPanjang = new Rectangle(10, 5);
$segitiga = new Triangle(8, 4);

   echo "Luas lingkaran = " . $lingkaran->getLuas() .
"<br/>";
echo "Luas Persegi Panjang = " . $persegiPanjang->getLuas() .
"<br/>";
echo "Luas Segitiga =  " . $segitiga->getLuas() .
"<br/>";
