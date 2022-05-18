<?php 
class BMI{
    public $berat;
    public $tinggi;
    public $nilai;
    public $status;

    function __construct($berat,$tinggi,$nilai){
        $this->berat = $berat;
        $this->tinggi = $tinggi;
        $this->nilai = $nilai;
    }
}
?>