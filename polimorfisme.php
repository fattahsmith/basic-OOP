<?php
abstract class komputer {
    abstract public function booting_os();
}

class laptop extends komputer {
    public function booting_os()
    {
        return "proses booting sistem operasi laptop";
    }
}

class pc extends komputer{
    public function booting_os()
    {
        return "proses booting operasi pc";
    }
}

class chrome extends komputer{
    public function booting_os()
    {
        return "proses booting operasi chromebook";
    }
}

$laptop_baru = new laptop();
$pc_baru = new pc();
$chromebook_baru = new chrome(); 

function booting_os_komputer($objek_komputer) {
    return $objek_komputer->booting_os();
}

echo booting_os_komputer($laptop_baru);
echo "</br>";
echo booting_os_komputer($pc_baru);
echo "</br>";
echo booting_os_komputer($chromebook_baru); 