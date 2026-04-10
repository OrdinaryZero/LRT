<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan; // Kita tetap pakai model Laporan yang sudah terhubung database
use Illuminate\Support\Facades\Http; 

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

        // 2. Simpan ke Database (Pakai cara manual agar 100% masuk ke Live Report)
        $laporan = new Laporan();
        $laporan->nama_warga = $request->nama_warga;
        $laporan->no_rumah = $request->no_rumah;
        $laporan->kategori = $request->kategori;
        $laporan->deskripsi_laporan = $request->deskripsi_laporan;
        $laporan->status = 'Menunggu';
        $laporan->save();

        // 3. Kirim Pesan ke WhatsApp RT otomatis
        $this->kirimWhatsAppRT($laporan);

        // 4. Kembali ke halaman Beranda dengan pesan sukses (Pop-up hijau)
        return redirect()->route('beranda')->with('success', 'Laporan berhasil dikirim ke Pak RT dan masuk ke Live Report!');
    }

    // Fungsi Private untuk integrasi API WhatsApp Fonnte
    private function kirimWhatsAppRT($laporan)
    {
        $token = '4QdT1dqvX2dttT1nW6cs'; // Token Fonnte kamu
        $nomor_rt = '085751524327'; // Nomor WhatsApp Pak RT

        $pesan = "*LAPORAN WARGA BARU (RT 01)*\n\n";
        $pesan .= "Nama: {$laporan->nama_warga}\n";
        $pesan .= "No Rumah/Blok: {$laporan->no_rumah}\n";
        $pesan .= "Kategori: {$laporan->kategori}\n";
        $pesan .= "Deskripsi: {$laporan->deskripsi_laporan}\n\n";
        $pesan .= "Mohon segera ditindaklanjuti atau cek menu Live Report di Website. Terima kasih.";

        // Mengirim request ke API Fonnte via cURL
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