<!DOCTYPE html>
<html>
<head>
    <title>Buat Kwitansi</title>
</head>
<body>
    <h1>Buat Kwitansi</h1>
    <form action="/kwitansi/store" method="post">
        <?= csrf_field(); ?>

        <label>Nama Penerima</label><br>
        <input type="text" name="nama_penerima" required><br><br>

        <label>Jumlah</label><br>
        <input type="number" step="0.01" name="jumlah" required><br><br>

        <label>Tanggal</label><br>
        <input type="date" name="tanggal" required><br><br>

        <label>Keterangan</label><br>
        <textarea name="keterangan"></textarea><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
