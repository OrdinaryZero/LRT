<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Surat; 
use Illuminate\Support\Facades\Http; 

class SuratController extends Controller
{
    public function index()
    {
        return view('surat.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'nik' => 'required|numeric',
            'blok' => 'required|string|max:50',
            'jenis' => 'required|string',
            'keperluan' => 'required|string',
        ]);

        $surat = Surat::create([
            'nama' => $request->nama,
            'nik' => $request->nik,
            'blok' => $request->blok,
            'jenis' => $request->jenis,
            'keperluan' => $request->keperluan,
            'status' => 'Menunggu' 
        ]);


        $nomorRT = '085751524327'; 
        $tokenFonnte = env('FONNTE_TOKEN', '4QdT1dqvX2dttT1nW6cs'); 

        $pesanWA = "*PERMOHONAN SURAT PENGANTAR BARU*\n\n"
                 . "Halo Bapak/Ibu RT, ada warga yang mengajukan surat pengantar dengan data berikut:\n\n"
                 . " *Nama:* " . $request->nama . "\n"
                 . " *NIK:* " . $request->nik . "\n"
                 . " *Blok/No:* " . $request->blok . "\n"
                 . " *Jenis Surat:* " . $request->jenis . "\n"
                 . " *Keperluan:* " . $request->keperluan . "\n\n"
                 . "Data telah tersimpan di sistem. Mohon untuk segera diproses/dicetak melalui Dashboard Admin. Terima kasih.";


        try {
            $response = Http::withHeaders([
                'Authorization' => $tokenFonnte,
            ])->post('https://api.fonnte.com/send', [
                'target' => $nomorRT,
                'message' => $pesanWA,
                'countryCode' => '62', 
            ]);
            

        } catch (\Exception $e) {
        }

        return redirect()->route('beranda')->with('success', 'Berhasil! Permohonan surat sedang diproses oleh RT.');
    }
}