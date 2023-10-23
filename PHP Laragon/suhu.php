<?php
echo "Rumus konversi suhu Celcius ke Fahrenheit:<br>";
$celcius = 30;
$rumusF = 9/5;
$tambah = 32;
$hasilF;

$hasilF = $celcius * $rumusF + $tambah;

echo "30 C<sup>o</sup> x 9/5 + 32 = $hasilF <br><br>";

echo "Rumus konversi suhu Celcius ke Kelvin: <br>";
$celcius = 30;
$rumusK = 273.15;
$hasilK;

$hasilK = $celcius + $rumusK;
echo "  K= ⁰C + 273,15 = $hasilK <br><br>";

echo " Rumus konversi suhu Celcius ke Reamur:<br>";
$celcius = 30;
$rumusR = 4/5;
$hasilR;
$hasilR = $celcius * $rumusR;

echo "  ⁰R = (4/5) ⁰C = $hasilR <br><br>";

echo "Rumus konversi suhu Celcius ke Rankine:<br>";
$celcius = 30;
$rumusRen = 273.15;
$rumusRen2 = 9/5;
$hasilRen;
$hasilRen = $celcius + $rumusRen * $rumusRen2;

echo "  ⁰Ra = (⁰C + 273.15) × 9/5 = $hasilRen ";