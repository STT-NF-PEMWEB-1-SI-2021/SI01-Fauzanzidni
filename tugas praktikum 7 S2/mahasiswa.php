<?php 
require_once 'person.php';

class Mahasiswa extends Person{
    public $nim;
    public $ipk;

    function __construct($nim,$nama){
        $this->nim = $nim;
        $this->nama = $nama;
    }

    public function predikat(){
        $predikat = ($this->ipk >= 3.50)?"Cumlaude":"Baik";
        return $predikat;
    }
}
?>