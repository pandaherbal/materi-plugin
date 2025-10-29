<?php

function dapatkanInput($prompt) {
    echo $prompt;
    return trim(fgets(STDIN));
}

function hitung($angka1, $operator, $angka2) {
    switch ($operator) {
        case '+':
            return $angka1 + $angka2;
        case '-':
            return $angka1 - $angka2;
        case '*':
            return $angka1 * $angka2;
        case '/':
            if ($angka2 == 0) {
                return "Error: Pembagian dengan nol!";
            }
            return $angka1 / $angka2;
        default:
            return "Error: Operator tidak valid!";
    }
}

function jalankanKalkulator() {
    echo "\n=== Kalkulator Sederhana ===\n\n";
    
    $angka1 = dapatkanInput("Masukkan angka pertama: ");
    
    if (!is_numeric($angka1)) {
        echo "Input tidak valid! Silakan masukkan angka yang benar.\n";
        return;
    }
    
    $operator = dapatkanInput("Pilih operator (+, -, *, /): ");
    
    if (!in_array($operator, ['+', '-', '*', '/'])) {
        echo "Operator tidak valid! Silakan pilih +, -, *, atau /\n";
        return;
    }
    
    $angka2 = dapatkanInput("Masukkan angka kedua: ");
    
    if (!is_numeric($angka2)) {
        echo "Input tidak valid! Silakan masukkan angka yang benar.\n";
        return;
    }
    
    $hasil = hitung($angka1, $operator, $angka2);
    
    echo "\nHasil: $angka1 $operator $angka2 = $hasil\n\n";
}

do {
    jalankanKalkulator();
    $lagi = dapatkanInput("Apakah Anda ingin melakukan perhitungan lagi? (y/t): ");
    $lagi = strtolower($lagi);
} while ($lagi === 'y' || $lagi === 'ya');

echo "\nTerima kasih telah menggunakan kalkulator. Sampai jumpa!\n";

?>