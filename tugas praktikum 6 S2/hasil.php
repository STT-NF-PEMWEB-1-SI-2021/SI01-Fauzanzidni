<?php 
require_once 'pasien.php';
require_once 'BMI.php';
require_once 'BMIPasien.php';

$psn1 = new Pasien("P001","Hartono");
$psn1->gender="L";
$psn1->tmp_lahir="Surabaya";
$psn1->tgl_lahir="2002-10-10";

$psn2 = new Pasien("P002","ezkiel");
$psn2->gender="L";
$psn2->tmp_lahir="Jakarta";
$psn2->tgl_lahir="2000-1-1";

$psn3 = new Pasien("P003","tono");
$psn3->gender = "L";
$psn3->tmp_lahir = "Surabaya";
$psn3->tgl_lahir = "1999-2-12";

$bmi1 = new BMI(65,178,24.7);
$bmi1->status = "Keberatan  Berat Bada";

$bmi2 = new BMI(65,165,20.3);
$bmi2->status = "Normal(ideal)";

$bmi3 = new BMI(45,177,15.4);
$bmi3->status = "Kekeruangan Berat Badan";

$bmip1 = new BMIPasien($psn1,$bmi1);
$bmip1->tanggal = "2022-01-1";

$bmip2 = new BMIPasien($psn2,$bmi2);
$bmip2->tanggal = "2022-11-12";

$bmip3 = new BMIPasien($psn3,$bmi3);
$bmip3->tanggal = "2022-8-7";

$ar_hasil = [$bmip1,$bmip2,$bmip3];
?>
<h1>Data Pasien, Berat Badan dan Tinggi Badan</h1>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal Periksa</th>
            <th>Kode Pasien</th>
            <th>Nama Pasien</th>
            <th>Gender</th>
            <th>Berat(kg)</th>
            <th>Tinggi(cm)</th>
            <th>NilaiBMI</th>
            <th>Status BMI</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor=1;
            foreach($ar_hasil as $arh){
        ?>
            <tr>
                <td><?=$nomor?></td>
                <td><?=$arh->tanggal?></td>
                <td><?=$arh->kode?></td>
                <td><?=$arh->nama?></td>
                <td><?=$arh->gender?></td>
                <td><?=$arh->berat?></td>
                <td><?=$arh->tinggi?></td>
                <td><?=$arh->nilai?></td>
                <td><?=$arh->status?></td>
            </tr>
        <?php
        $nomor++;
            }
        ?>
    </tbody>
</table>
