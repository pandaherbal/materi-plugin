<?php 

$tanggal_lahir = 26;

echo "1. while loop, kelipatan tanggal lahir <100\n";

$a = (int)$tanggal_lahir;
$k = 1;
while ($a * $k < 100) {
    echo ($a * $k) . "\n";
    $k++;
}


echo "1. do while loop, cetak 'belajar php' sesuai nama depan\n";

$nama_depan = "iqbal";
$jumlah_huruf = strlen($nama_depan);

$i = 0;
do {
    echo "Belajar PHP\n";
    $i++;
} while ($i < $jumlah_huruf);
?>