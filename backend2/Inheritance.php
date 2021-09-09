<?php
class Clarissa {
  public $name;
  public $umur;
  public $hobi;
  public function __construct($name, $umur, $hobi) {
    $this->name = $name;
    $this->umur = $umur;
    $this->hobi = $hobi;
  }
  public function intro() {
    echo "Saya berumur {$this->umur} Hobi saya {$this->hobi}";
  }
}

// Strawberry is inherited from Fruit
class Cabang extends Baskara {
  public function message() {
    echo"<h1>Hellow Teman</h1>";
    echo "Hai Nama saya {$this->name} ";
  }
}
$strawberry = new Cabang ("Clarissa Putri Aurellia", "20", "Menyanyi" );
$strawberry->message();
$strawberry->intro();
?>

