<?php 
require_once 'dosen.php';
require_once 'matakuliah.php';
require_once 'dosenmatakuliah.php';

$dsn1 = new Dosen("101131","Ria hayana");
$dsn1->gender="P";
$dsn1->tmp_lahir="Jakarta";
$dsn1->tgl_lahir="1996-12-13";
$dsn1->pendidikan="S1";

$dsn2 = new Dosen("101132","Rahmawati");
$dsn2->gender="P";
$dsn2->tmp_lahir="Depok";
$dsn2->tgl_lahir="1978-01-03";
$dsn2->pendidikan="S1";

$dsn3 = new Dosen("101132","Haryono");
$dsn3->gender="L";
$dsn3->tmp_lahir="Bandung";
$dsn3->tgl_lahir="1976-11-09";
$dsn3->pendidikan="S3";

$mk1 = new Matakuliah("Basis Data",3,"Basdat");
$mk2 = new Matakuliah("Pemrograman Web ",3,"PemWeb");
$mk3 = new Matakuliah("Ppkn",3,"pkn");

$dmk1 = new DosenMatakuliah($dsn1,$mk1,"2021");
$dmk1->hari="Selasa";
$dmk1->kelas="B01";
$dmk2 = new DosenMatakuliah($dsn2,$mk2,"2021");
$dmk2->hari="Rabu";
$dmk2->kelas="A01";
$dmk3 = new DosenMatakuliah($dsn3,$mk3,"2021");
$dmk3->hari="Rabu";
$dmk3->kelas="A05";

$ar_jadwal = [$dmk1,$dmk2,$dmk3];

?>
<h1>Jadwal Kuliah Program Studi Sistem Informasi - STTNF</h1>
<table class="table" border="1" width="100%">
    <thead>
        <tr>
            <th>No</th><th>Semester</th><th>Matakuliah</th>
            <th>SKS</th><th>Dosen</th><th>Hari</th><th>Kelas</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor=1;
            foreach($ar_jadwal as $obk){
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$obk->semester?></td>
                <td><?=$obk->matakuliah->nama?></td>
                <td><?=$obk->matakuliah->sks?></td>
                <td><?=$obk->dosen->nama?></td>
                <td><?=$obk->hari?></td>
                <td><?=$obk->kelas?></td>
            </tr>
        <?php
            $nomor++;
            }
        ?>
    </tbody>
</table>