<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\Http; // Untuk memanggil API WhatsApp

class ReportController extends Controller
{
    // Menampilkan halaman form
    public function index()
    {
        return view('lapor');
    }

    // Memproses data yang di-submit
    public function store(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'nama_warga' => 'required',
            'no_rumah' => 'required',
            'kategori' => 'required',
            'deskripsi_laporan' => 'required',
        ]);

        // 2. Simpan ke Database
        $report = Report::create($request->all());

        // 3. Kirim Pesan ke WhatsApp RT otomatis
        $this->kirimWhatsAppRT($report);

        // 4. Kembali ke halaman dengan pesan sukses
        return redirect()->back()->with('success', 'Laporan berhasil dikirim! Bapak/Ibu RT akan segera menindaklanjuti.');
    }

    // Fungsi Private untuk integrasi API WhatsApp (Contoh pakai Fonnte)
    private function kirimWhatsAppRT($report)
    {
        $token = '4QdT1dqvX2dttT1nW6cs'; // Dapatkan token dari m.fonnte.com
        $nomor_rt = '0881080543644'; // Ganti dengan nomor WhatsApp Pak RT

        $pesan = "* LAPORAN WARGA BARU *\n\n";
        $pesan .= "Nama: {$report->nama_warga}\n";
        $pesan .= "No Rumah/Blok: {$report->no_rumah}\n";
        $pesan .= "Kategori: {$report->kategori}\n";
        $pesan .= "Deskripsi: {$report->deskripsi_laporan}\n\n";
        $pesan .= "Mohon segera ditindaklanjuti. Terima kasih.";

        // Mengirim request ke API
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://api.fonnte.com/send',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array(
            'target' => $nomor_rt,
            'message' => $pesan,
          ),
          CURLOPT_HTTPHEADER => array(
            "Authorization: $token"
          ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
    }
}
