<?php
// Buat Iterator
class MyIterator implements Iterator {
  private $items = [];
  private $pointer = 0;

  public function __construct($items) {
    // array_values() memastikan bahwa kuncinya adalah angka
    $this->items = array_values($items);
  }

  public function current() {
    return $this->items[$this->pointer];
  }

  public function key() {
    return $this->pointer;
  }

  public function next() {
    $this->pointer++;
  }

  public function rewind() {
    $this->pointer = 0;
  }

  public function valid() {
    // count() menunjukkan berapa banyak item dalam daftar
    return $this->pointer < count($this->items);
  }
}

// Fungsi yang menggunakan iterable
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

// Gunakan iterator sebagai iterable
$iterator = new MyIterator(["satu", "dua", "tiga"]);
printIterable($iterator);
?>