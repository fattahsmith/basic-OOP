

/*
| ----------------------------------------------------------------------------
| inheritance
| ----------------------------------------------------------------------------
*/<?php

use hewan as globalHewan;

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


class mamalia extends Hewan
{
  public function menyusui()
  {
    echo "ngombee broo";
  } 
} 

class kambing extends mamalia
{
}

$kambing = new kambing();
$kambing->menyusui();
echo PHP_EOL;
