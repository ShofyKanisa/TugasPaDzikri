<?php

    //Soal AND //Harus bisa keduanya
    $username = "Mark";
    $password = "cokiber";

    if($username == "Mark" && $password == "cokiber"){
        echo("Selamat Anda berhasil login!");
    }else{
        echo("Maaf username atau password Anda salah");
    }

    echo "<br><br>";

    //Soal OR  //Bisa salah satunya
    $username = "Mark";
    $password = "cokiber";

    if($username == "Mark" || $password == "cokiber"){
        echo("Selamat Anda berhasil login!");
    }else{
        echo("Maaf username dan password Anda salah");
    }

    echo "<br><br>";

    //Soal Inputan Nilai
    $nilai = 90;

    if($nilai == 0){
        echo("Belajar yang bener ya manis, nilai kamu kosong banget");
    }

    if($nilai > 100){
        echo("Maaf inputan Anda melebihi batas!");
    }

    else if($nilai > 89){
        echo("A+");
    }else if($nilai > 79){
        echo("A");
    }else if($nilai > 69){
        echo("B+");
    }else if($nilai > 59){
        echo("B");
    }else if($nilai > 49){
        echo("C");
    }else if($nilai > 0){
        echo("E");
    }else if($nilai < 0){
        echo("Error");
    }

    echo "<br><br>";

    //Soal Menonton Film
    $umur = 18;
    $tiket = 50.000;
    $film = "Avengers";

    if($umur >= 18 && $tiket == 100.00 && $film == "Avengers"){
    echo "Selamat menonton film dengan VIP";
    }
    elseif($umur >= 18 && $tiket == 50.000 && $film == "Avengers"){
    echo "Selamat menonton";
    }
    elseif($umur >=18 && $tiket == 50.000 && $film == "Avengers"){
    echo "Film tidak ada, kembali lagi nanti";
    }
    elseif($umur < 18){
    echo "Anak kicik tidak boleh nonton";
    }
    else{
    echo "Film tidak ada";
    }

?>