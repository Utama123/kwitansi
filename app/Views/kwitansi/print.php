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
    <h1>Kwitansi</h1>
    <p>No Kwitansi: <?= $kwitansi['no_kwitansi']; ?></p>
    <p>Nama Penerima: <?= $kwitansi['nama_penerima']; ?></p>
    <p>Jumlah: Rp <?= number_format($kwitansi['jumlah'], 2); ?></p>
    <p>Terbilang: <?= ucfirst(terbilang($kwitansi['jumlah'])) . ' rupiah'; ?></p>
    <p>Tanggal: <?= $kwitansi['tanggal']; ?></p>
    <p>Keterangan: <?= $kwitansi['keterangan']; ?></p>
</body>
</html>
