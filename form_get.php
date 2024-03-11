<?php
$proses = $_GET['proses'];
$name = $_GET['name'];
$matkul = $_GET['matkul'];
$nilai = $_GET['nilai'];
$nilaiu = $_GET['nilaiu'];
$nilaip = $_GET['nilaip'];

echo 'Proses : ' . $proses;
echo '<br/>Nama : ' . $name;
echo '<br/>Mata kuliah : ' . $matkul;
echo '<br/>Nilai UTS : ' . $nilai;
echo '<br/>Nilai UAS : ' . $nilaiu;
echo '<br/>Nilai Praktikum : ' . $nilaip;
