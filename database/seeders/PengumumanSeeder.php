<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengumuman; // Pastikan Anda mengimpor model Pengumuman

class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Menyebar data pengumuman ke dalam tabel pengumumans
        Pengumuman::create([
            'kelas' => 'kelas_1',
            'tanggal' => '2024-11-20',
            'judul' => 'Ujian Tengah Semester',
            'isi' => 'Ujian tengah semester akan dimulai pada 20 November. Harap persiapkan diri dengan baik.',
        ]);
    
        Pengumuman::create([
            'kelas' => 'kelas_2',
            'tanggal' => '2024-10-25',
            'judul' => 'Praktikum Fisika',
            'isi' => 'Praktikum Fisika untuk kelas 2 akan dilaksanakan pada 25 Oktober.',
        ]);

        // Menambahkan pengumuman umum yang tidak terkait dengan kelas tertentu
        Pengumuman::create([
            'kelas' => 'kelas_3', // Jika tidak terkait dengan kelas tertentu
            'tanggal' => '2024-09-15',
            'judul' => 'Libur Nasional',
            'isi' => 'Sekolah akan libur pada 15 September untuk merayakan Hari Kemerdekaan.',
        ]);
    }
}
