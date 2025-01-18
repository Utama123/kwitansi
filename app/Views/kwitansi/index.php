<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kwitansi</title>
</head>
<body>
    <h1>Daftar Kwitansi</h1>
    <a href="/kwitansi/create">Buat Kwitansi Baru</a>
    <table border="1">
        <thead>
            <tr>
                <th>No Kwitansi</th>
                <th>Nama Penerima</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kwitansi as $k) : ?>
            <tr>
                <td><?= $k['no_kwitansi']; ?></td>
                <td><?= $k['nama_penerima']; ?></td>
                <td><?= $k['jumlah']; ?></td>
                <td><?= $k['tanggal']; ?></td>
                <td>
                    <a href="/kwitansi/print/<?= $k['id']; ?>" target="_blank">Lihat</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
