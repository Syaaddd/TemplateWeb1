<?php
// File tempat menyimpan jumlah pengunjung
$counterFile = "counter.txt";

// Cek apakah file counter.txt ada
if (!file_exists($counterFile)) {
    // Jika tidak ada, buat file dengan angka 0
    file_put_contents($counterFile, 0);
}

// Baca nilai counter dari file
$counter = file_get_contents($counterFile);

// Tambahkan 1 pada counter
$counter++;

// Simpan kembali nilai counter ke file
file_put_contents($counterFile, $counter);

// Tampilkan jumlah pengunjung
echo $counter;
?>
