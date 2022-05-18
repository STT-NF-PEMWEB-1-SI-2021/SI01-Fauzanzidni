<?php 
class Pasien{
    public $kode;
    public $nama;
    public $gender;
    public $tmp_lahir;
    public $tgl_lahir;
    public $email;

    function __construct($kode,$nama){
        $this->kode = $kode;
        $this->nama = $nama;        
    }
}
?>
