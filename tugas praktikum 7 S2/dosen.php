<?php 
require_once 'person.php';

class Dosen extends Person{
    public $nidn;
    public $pendidikan;

    function __construct($nidn,$nama){
        $this->nidn = $nidn;
        $this->nama = $nama;
    }
}

