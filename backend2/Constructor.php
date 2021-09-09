<?php
class Nama {
  public $name;
  public $umur;

  function __construct($name, $umur) {
    $this->name = $name;
    $this->umur = $umur;
  }
  function __destruct() {
    echo "Nama panjang saya {$this->name} dan umur saya {$this->umur}.";
  }
}

$terusan = new Nama("Clarissa Putri Aurellia", "20");
?>