<?php
$submit = $_GET['submit'];
$name = $_GET['name'];
$produk = $_GET['produk'];
$jumlah = $_GET['jumlah'];

echo 'Proses : ' . $submit;
echo '<br/>Customer : ' . $name;
echo '<br/>Produk : ' . $produk;
echo '<br/>Jumlah : ' . $jumlah;
