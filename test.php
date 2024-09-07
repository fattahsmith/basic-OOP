<?php
class barang{
public $mouse;
public function PesanBarang(){}
}
class keyboard
{
    public $keyboard = "1";
    public $mouse = "2";
    public $pc = "3";
    public $laptop = "4";
    public $modem = "5";
}

$barang = new barang();
echo $barang->PesanBarang();

$keyboard = new keyboard();
echo "keybord : " . $keyboard->keyboard;
echo "<br>";
echo  "mouse : ".$keyboard->mouse;
echo "<br>";
echo "pc :" .$keyboard->pc;
echo "<br>";
echo  "laptop :" .$keyboard->laptop;
echo "<br>";
echo  "modem :" .$keyboard->modem;
