<?php
// Program penilaian mahasiswa dengan perbaikan maksimal 2x

echo "Masukkan nama mahasiswa: ";
$nama = trim(fgets(STDIN));

echo "Masukkan nilai awal: ";
$nilai_awal = (int) trim(fgets(STDIN));

$kkm = 75;
echo "=============================\n";
echo "Nama: $nama\n";
echo "Nilai Awal: $nilai_awal\n";

if ($nilai_awal >= $kkm) {
    echo "Status: Lulus (KKM: $kkm)\n";
    exit;
} else {
    echo "Status: Tidak Lulus (KKM: $kkm)\n";
}

$perbaikan_ke = 0;
$nilai = $nilai_awal;

while ($nilai < $kkm && $perbaikan_ke < 2) {
    $perbaikan_ke++;
    echo "\nApakah $nama ingin melakukan perbaikan ke-$perbaikan_ke? (y/n): ";
    $jawab = strtolower(trim(fgets(STDIN)));

    if ($jawab != 'y') {
        echo "Tidak melakukan perbaikan. Status akhir: Tidak Lulus\n";
        exit;
    }

    echo "Masukkan nilai perbaikan ke-$perbaikan_ke: ";
    $nilai_perbaikan = (int) trim(fgets(STDIN));

    $nilai = $nilai_perbaikan;

    echo "Nilai akhir setelah perbaikan ke-$perbaikan_ke: $nilai\n";

    if ($nilai >= $kkm) {
        echo "Sudah mencapai KKM ($kkm). Anda Lulus\n";
        exit;
    } else {
        echo "Belum mencapai KKM ($kkm)\n";
    }
}

if ($nilai < $kkm) {
    echo "\nSudah mencapai batas maksimal perbaikan (2x). Status: Tidak Lulus\n";
}
?>
