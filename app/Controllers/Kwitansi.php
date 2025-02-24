<?php

namespace App\Controllers;

use App\Models\KwitansiModel;
use Dompdf\Dompdf;

class Kwitansi extends BaseController
{
    protected $kwitansiModel;

    public function __construct()
    {
        $this->kwitansiModel = new KwitansiModel();
    }

    public function index()
    {
        $data['kwitansi'] = $this->kwitansiModel->findAll();
        return view('kwitansi/index', $data);
    }

    public function create()
    {
        return view('kwitansi/create');
    }

    public function print($id)
    {      
        // Ambil data kwitansi berdasarkan ID
        $kwitansi = $this->kwitansiModel->find($id);
        // Tampilkan view print tanpa PDF
        return view('kwitansi/print', ['kwitansi' => $kwitansi]);
    }
    public function generateNoKwitansi()
{
    $lastKwitansi = $this->kwitansiModel->orderBy('id', 'DESC')->first();
    if ($lastKwitansi) {
        $lastNo = (int) filter_var($lastKwitansi['no_kwitansi'], FILTER_SANITIZE_NUMBER_INT);
        $newNo = $lastNo + 1;
    } else {
        $newNo = 1;
    }
    return 'KW-' . str_pad($newNo, 6, '0', STR_PAD_LEFT); // Contoh: KW-000001
}

public function store()
{
    $noKwitansi = $this->generateNoKwitansi(); // Nomor otomatis
    $this->kwitansiModel->save([
        'no_kwitansi' => $noKwitansi,
        'nama_penerima' => $this->request->getPost('nama_penerima'),
        'jumlah' => $this->request->getPost('jumlah'),
        'tanggal' => $this->request->getPost('tanggal'),
        'keterangan' => $this->request->getPost('keterangan'),
    ]);

    return redirect()->to('/kwitansi');
}

}
