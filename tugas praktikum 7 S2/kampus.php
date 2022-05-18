<?php 
require_once 'mahasiswa.php';
require_once 'dosen.php';
require_once 'matakuliah.php';
require_once 'dosenmatakuliah.php';

$mhs1  = new Mahasiswa("012","Dewi Sartini");
$mhs1->ipk = 3.52;
$mhs1->gender ="P";
$mhs1->tmp_lahir="Depok";
$mhs1->tgl_lahir="2000-01-15";

$dsn1 = new Dosen("101131","Ria hayana");
$dsn1->pendidikan="S1";
$dsn1->gender="P";
$dsn1->tmp_lahir="Jakarta";
$dsn1->tgl_lahir="1986-12-13";

$dsn2 = new Dosen("101132","Rahmawati");
$dsn2->pendidikan="S1";
$dsn2->gender="P";
$dsn2->tmp_lahir="Depok";
$dsn2->tgl_lahir="1986-01-03";

$dsn3 = new Dosen("101132","Haryono");
$dsn3->gender="L";
$dsn3->tmp_lahir="Bandung";
$dsn3->tgl_lahir="1976-11-09";
$dsn3->pendidikan="S3";


echo 'Nama Mahasiswa: '.$mhs1->nama;
echo '<br/>IPK : '.$mhs1->ipk;
echo '<br/>Predikat '.$mhs1->predikat();

echo '<hr/>';
echo 'Nama Dosen : '.$dsn1->nama;
echo '<br>Pendidikan Akhir '.$dsn1->pendidikan;

$mk1 = new Matakuliah("Statistik",3,"STAT");
$mk2 = new Matakuliah("Pemrograman Web ",3,"PemWeb");
$mk3 = new Matakuliah("Ppkn",3,"ppkn");

$dmk1 = new DosenMatakuliah($dsn1,$mk1,2021);
$dmk1->hari="Senin";
$dmk1->ruangan="B01";

$dmk2 = new DosenMatakuliah($dsn2,$mk2,2021);
$dmk2->hari="Rabu";
$dmk2->ruangan="A01";

$dmk3 = new DosenMatakuliah($dsn3,$mk3,2021);
$dmk3->hari="Rabu";
$dmk3->ruangan="A05";


$ar_jadwal = [$dmk1,$dmk2,$dmk3];
?>
<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>No</th><th>Semester</th><th>Matakuliah</th>
            <th>SKS</th><th>Dosen</th><th>Hari</th><th>Ruangan</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $nomor =1;
        foreach($ar_jadwal as $obj){
    ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$obj->semester?></td>
            <td><?=$obj->matakuliah->nama?></td>
            <td><?=$obj->matakuliah->sks?></td>
            <td><?=$obj->dosen->nama?></td>
            <td><?=$obj->hari?></td>
            <td><?=$obj->ruangan?></td>
        </tr>
    <?php  
    $nomor++;      
        }
    ?>
    </tbody>
</table>

