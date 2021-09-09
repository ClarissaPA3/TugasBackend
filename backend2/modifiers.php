<?php
class Buku
{
    public $nama;
    protected $hobi;

    public function getNama(){
        echo $this->nama."<br>";
    }
    public function getHobi(){
        echo $this->hobi."<br>";
    }
}
class komik extends Buku{
    public $umur;

    function getUmur(){
        echo $this->umur."<br>";  
    }
    function __construct($parameter1, $parameter2, $parameter3){
        $this->nama=$parameter1;
        $this->umur=$parameter2;
        $this->hobi=$parameter3;
    }
}
$Baskara = new komik("Clarissa zputri Aurellia",20,"Menyanyi");
echo '<h1>Hallo Temann</h1> ';
echo 'Perkenalkan Nama saya '; $clarissa->getNama();
echo 'Umur saya '; $clarissa->getUmur();
echo 'Hobi saya '; $clarissa->getHobi();
?>