<?php


use App\Model\Akademik\Dosen;
use App\Model\Akademik\Pegawai;

require_once 'vendor/autoload.php';

$dian = new Dosen(198411132015041001, "Dian Prawira", 62111111, "Jln Purnama", "1000121184001");
$dian->mengajar();

echo "<br>No HP Dosen: " . $dian->getNoHp();