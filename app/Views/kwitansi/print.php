<!DOCTYPE html>
<html>
<head>
    <title>Kwitansi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
<?php
    function terbilang($angka)
    {
        $angka = abs($angka);
        $angkaText = [
            '', 'satu', 'dua', 'tiga', 'empat', 'lima',
            'enam', 'tujuh', 'delapan', 'sembilan', 'sepuluh', 'sebelas'
        ];
        $result = '';

        if ($angka < 12) {
            $result = ' ' . $angkaText[$angka];
        } elseif ($angka < 20) {
            $result = terbilang($angka - 10) . ' belas';
        } elseif ($angka < 100) {
            $result = terbilang(floor($angka / 10)) . ' puluh' . terbilang($angka % 10);
        } elseif ($angka < 1000) {
            $result = terbilang(floor($angka / 100)) . ' ratus' . terbilang($angka % 100);
        } elseif ($angka < 1000000) {
            $result = terbilang(floor($angka / 1000)) . ' ribu' . terbilang($angka % 1000);
        } elseif ($angka < 1000000000) {
            $result = terbilang(floor($angka / 1000000)) . ' juta' . terbilang($angka % 1000000);
        }

        return trim($result);
    }
    ?>
    <h1>Kwitansi</h1>
    <p>No Kwitansi: <?= $kwitansi['no_kwitansi']; ?></p>
    <p>Nama Penerima: <?= $kwitansi['nama_penerima']; ?></p>
    <p>Jumlah: Rp <?= number_format($kwitansi['jumlah'], 2); ?></p>
    <p>Terbilang: <?= ucfirst(terbilang($kwitansi['jumlah'])) . ' rupiah'; ?></p>
    <p>Tanggal: <?= $kwitansi['tanggal']; ?></p>
    <p>Keterangan: <?= $kwitansi['keterangan']; ?></p>
</body>
</html>
