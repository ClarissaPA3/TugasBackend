<?php
class Clarissa{
    public $umur_clarissa = '20 Tahun';
    public $umur_dema = '19 Tahun';

    public function Hobi1() {
        echo 'menyanyi';
    }
    public function Hobi2() {
        echo 'Travelling keliling kota ';
    }
}
$clarissa 	 = new Clarissa;
$dema  = new Clarissa;
?>

<p>Hai, nama saya Clarissa Putri Aurellia, saya berumur <?= $clarissa->umur_clarissa ?>, Hobi Saya <?= $clarissa->Hobi1() ?>.</p>
<p>Hai, nama saya Dema Listyaningrum , saya berumur <?= $dema->umur_dema ?>, Hobi Saya<?= $dema->Hobi2() ?>.</p>