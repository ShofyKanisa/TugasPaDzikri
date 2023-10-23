<?php

$sisipersegi1 = 5;
$sisipersegi2 = 5;
$hasilpersegi;

$panjang = 10;
$lebar = 5;
$hasilpersegipanjang;

$bilangan1 = 0.5;
$alas = 10;
$tinggi = 7;
$hasilsegitiga;

$bilangan2 = 22/7;
$jari1 = 7;
$jari2 = 7;
$hasillingkaran;

$hasilpersegi = $sisipersegi1 * $sisipersegi2;
echo "LUAS PERSEGI <br>";
echo "Luas : s x s <br>";
echo "Hasil : $sisipersegi1 x $sisipersegi2 = $hasilpersegi <br><br>";

$hasilpersegipanjang = $panjang * $lebar;
echo "LUAS PERSEGI PANJANG <br>";
echo "Luas : p x l <br>";
echo "Hasil : $panjang x $lebar = $hasilpersegipanjang <br><br>";

$hasilsegitiga = $bilangan1 * $alas * $tinggi;
echo "LUAS SEGITIGA <br>";
echo "Luas : 1/2 x a x t <br>";
echo "Hasil : $bilangan1 x $alas x $tinggi = $hasilsegitiga <br><br>";

$hasillingkaran = $bilangan2 * $jari1 * $jari2;
echo "LUAS LINGKARAN <br>";
echo "Luas : 22/7 x r x r <br>";
echo "Hasil : 22/7 x $jari1 x $jari2 = $hasillingkaran";