<?php 
require_once 'pasien.php';

class BMIPasien{
    public $bmi;
    public $pasien;
    public $tanggal;

    function __construct($pasien,$bmi){
        $this->pasien= $pasien;
        $this->bmi = $bmi;
        
    }
}
?>
