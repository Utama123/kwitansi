<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>invoice</title>
    <link rel="stylesheet" href="<?=base_url();?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/styles.min.css"> 

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

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="page-content container">
    <div class="page-header text-blue-d2">
        <h1 class="page-title text-secondary-d1">
            Invoice
            <small class="page-info">
                <i class="fa fa-angle-double-right text-80"></i>
                ID: #111-222
            </small>
        </h1>
    </div>
</div>

    <div class="container px-0">
        <div class="row mt-4">
            <div class="col-12 col-lg-10 offset-lg-1">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center text-150">
                            <i class="fa fa-book fa-2x text-success-m2 mr-1"></i>
                            <span class="text-default-d3">Bootdey.com</span>
                        </div>
                    </div>
                </div>
                <!-- .row -->
                    <!-- /.col -->

                    <div class="text-95 col-sm-6 align-self-start d-sm-flex justify-content-end">
                        <hr class="d-sm-none" />
                        <div class="text-grey-m2">
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125">
                                Invoice
                            </div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">ID:</span> #111-222</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Issue Date:</span> Oct 12, 2019</div>

                            <div class="my-2"><i class="fa fa-circle text-blue-m2 text-xs mr-1"></i> <span class="text-600 text-90">Status:</span> <span class="badge badge-warning badge-pill px-25">Unpaid</span></div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                    <!-- or use a table instead -->
                    
            <div class="table-responsive">
                <table class="table table-striped table-borderless border-0 border-b-2 brc-default-l1">
                    <thead class="bg-none bgc-default-tp1">
                        <tr class="text-white">
                            <th class="opacity-2">No Kwitansi</th>
                            <th>Nama Penerima</th>
                            <th>Jumlah</th>
                            <th>Terbilang</th>
                            <th>Tanggal</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>

                    <tbody class="text-95 text-secondary-d3">
                        <tr></tr>
                        <tr>
                        <td> <?= $kwitansi['no_kwitansi']; ?></td>
                        <td> <?= $kwitansi['nama_penerima']; ?></td>
                        <td><?= number_format($kwitansi['jumlah'], 2); ?></td>
                        <td> <?= ucfirst(terbilang($kwitansi['jumlah'])) . ' rutdiah'; ?></td>
                        <td> <?= $kwitansi['tanggal']; ?></td>
                        <td> <?= $kwitansi['keterangan']; ?></td>
                        </tr> 
                    </tbody>
                </table>
            </div>
                    <hr />

                </div>
            </div>
        </div>
    </div>
</div>
    <script src="<?=base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script> 
</body>
</html>

