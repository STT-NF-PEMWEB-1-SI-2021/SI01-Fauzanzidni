<?php 
class persegipanjang{
    public $panjang;
    public $lebar;

    public function luasp(){
        $luas=$this->panjang*$this->lebar;
        return "luas :".$luas;
    }
    public function kelilingp(){
        $keliling=2*($this->panjang+$this->lebar);
        return "Keliling :".$keliling;
    }

    public function setLebar($lebar){
        return $this->lebar=$lebar;
    }
    public function setPanjang($panjang){
        return $this->panjang=$panjang;
    }
}
$LuasPersegi=new persegipanjang();
echo "panjang :".$LuasPersegi->setPanjang(10);
echo "<br>";
echo "lebar :".$LuasPersegi->setLebar(10);
echo "<br>";
echo $LuasPersegi->luasp();
echo "<br>";
echo $LuasPersegi->kelilingp();
?>