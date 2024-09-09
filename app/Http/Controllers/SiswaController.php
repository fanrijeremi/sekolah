<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;  // Model untuk Jadwal
use App\Models\Pengumuman;  // Model untuk Pengumuman

class SiswaController extends Controller
{
    // Menampilkan form awal siswa tanpa data jadwal dan pengumuman
    public function index()
    {
        return view('siswa');  // View yang menampilkan form pemilihan kelas
    }

    // Menampilkan jadwal dan pengumuman berdasarkan kelas
    public function show(Request $request)
    {
        // Mendapatkan kelas dari request
        $kelas = $request->input('kelas');

        // Cek jika kelas tidak dipilih
        if (!$kelas) {
            return redirect()->route('siswa.index')->withErrors(['msg' => 'Kelas tidak dipilih']);
        }

        // Mengambil jadwal berdasarkan kelas
        $jadwals = Jadwal::where('kelas', $kelas)->get();

        // Mengambil pengumuman yang relevan (untuk kelas tertentu atau umum)
        $pengumumans = Pengumuman::where('kelas', $kelas)
                                 ->orWhereNull('kelas')  // Pengumuman umum
                                 ->get();

        // Mengirim data ke view
        return view('siswa', compact('jadwals', 'pengumumans', 'kelas'));
    }
}
