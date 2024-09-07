<?php
 class hewan
 {
    private $jenis;

    public function setjenis($jenis)
    {
        $this->jenis = $jenis;
    }

    public function getjenis()
    {
        return $this->jenis;
    }
 }

class kambing extends hewan
{

}

class harimau extends hewan
{

}
class singa extends hewan
{

}
$kambing = new kambing();
$kambing->setjenis('herbivora');

$harimau = new harimau();
$harimau->setjenis('karnivora');

$singa = new singa();
$singa->setjenis('karnivora');

echo $kambing->getjenis();
echo PHP_EOL;
echo $harimau->getjenis();
echo PHP_EOL;
echo $singa->getjenis();
echo PHP_EOL;
