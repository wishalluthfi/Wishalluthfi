<?php

// class produk
class Produk {

// property
public string $Kode;
public string $Nama;
public int $Harga;
public int $Stok;

//constant class pajak
public const PAJAK = 0.11;

}

// buat objek
$Produk = new Produk();
$Produk->Kode = 'P0001';
$Produk->Nama = 'LAPTOP';
$Produk->Harga = 10000000;
$Produk->Stok = 5;

// hitung pajak
$pajak = Produk::PAJAK * 100;
$jumlahpajak = $Produk->Harga * produk::PAJAK;

// total Harga
$total = $Produk->Harga + $jumlahpajak;


// hasil
echo 'produk : ' .$Produk->Nama;
echo "</br>";
echo "harga : RP." . $Produk->Harga;
echo "</br>";
echo "Stok : ". $Produk->Stok;
echo "</br>";
echo "Pajak :". $pajak . "%";
echo "</br>";
echo "total harga setelah pajak : RP." .$total;