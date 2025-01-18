<?php

namespace App\Models;

use CodeIgniter\Model;

class KwitansiModel extends Model
{
    protected $table = 'kwitansi';
    protected $primaryKey = 'id';
    protected $allowedFields = ['no_kwitansi', 'nama_penerima', 'jumlah', 'tanggal', 'keterangan'];
}
