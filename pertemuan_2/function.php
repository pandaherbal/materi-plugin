<?php

// function untuk melakukan sesuaatu dan bisa dipanggil berulang

function sapa($nama, $umur = 12){
    echo "halo, $nama ganteng, umur $umur tahun";
}

sapa("rehan", 125);
echo "\n";

$angka = 9;

function tambah ($a, $b){
    global $angka;  // global bisa di akses dimana saja termasuk di luar fungsi
    $angka = 5;
    echo $a * $b . "\n";

}
tambah(10, 78);
echo $angka;

function simulasi($index = 0){
    echo "jawa ";
    if ($index < 9){
        simulasi($index + 1);
    }else{
        echo "sunda";
    }
}

simulasi();

$inputnama = readline("masukkan nama: ");
echo "halo, $inputnama";

echo "\n";
?>