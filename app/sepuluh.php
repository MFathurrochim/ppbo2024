<?php


require_once 'app/admin/HomePage.php';
require_once 'app/admin/ManajemenArtikel.php';


use app\admin\HomePage;
use app\admin\ManajemenArtikel;


$hp = new HomePage();
$hp->tampil();


$ma = new ManajemenArtikel();
$ma->tambah();
