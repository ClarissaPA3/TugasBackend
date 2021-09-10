<!DOCTYPE html>
<html>
<body>
 
<?php
//class/object
class Motors {
 
//access modifier
  public $brand;
  public $tipe;
 
//constuktor
  public function __construct($brand, $tipe) {
    $this->brand = $brand;
    $this->tipe = $tipe; 
  }
 
//destruktor
  function __destruct() {
echo "brand {$this->brand}."; 
    echo "<br>";
    echo "<hr>";
  }
 
  public function intro() {
    echo "Ada brand {$this->brand} memiliki tipe motor baru "; 
    echo "<br>";
    echo "<hr>";
  }
}
 
//inheritance
class Jenis extends Motors {
  public function message() {
    echo "Brand Honda memiliki 2 tipe baru"; 
    echo "<br>";
    echo "<hr>";
  }
}
 
//static method
class greeting {
  public static function welcome() {
    echo "Tipe barunya yaitu PCX dan Scoopy";
    echo "<br>";
    echo "<hr>";
  }
}
 
//static properties
class harga {
  public static $value = 35000000;
}
 
$Jenis = new Jenis("Honda", "PCX");
$Jenis->message();
$Jenis->intro();
 
greeting::welcome();
 
echo harga::$value;
 
//iretables
function getIterable():iterable {
  return [" adalah", " harga", " Satu unit"." PCX"];
}
 
$myIterable = getIterable();
foreach($myIterable as $item) {
  echo $item;
}
//interface
interface motor {
  public function jumlahCilinder();
}
 
class PCX implements motor {
  public function jumlahCilinder() {
    echo "<hr>";
    echo " Memiliki cc 150 ";
  }
}
 
class Scoopy implements motor {
  public function jumlahCilinder() {
    echo ", Memiliki cc 125 ";
  }
}
 
class Beat implements motor {
  public function jumlahCilinder() {
    echo ", Memiliki cc 110 ";
    echo "<br>";
    echo "<hr>";
  }
}
 
$PCX = new PCX();
$Scoopy = new Scoopy();
$Beat = new Beat();
$motors = array($PCX, $Scoopy, $Beat);
 
foreach($motors as $motor) {
  $motor->jumlahCilinder();
}
?>
 
</body>
</html>