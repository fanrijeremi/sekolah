<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Jadwal; // Pastikan Anda mengimpor model Jadwal

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Menyebar data jadwal ke dalam tabel jadwals
        Jadwal::create([
            'kelas' => 'kelas_1',
            'hari' => 'Senin',
            'mata_pelajaran' => 'Matematika',
            'jam_mulai' => '08:00:00',
            'jam_selesai' => '09:30:00',
        ]);

        Jadwal::create([
            'kelas' => 'kelas_1',
            'hari' => 'Selasa',
            'mata_pelajaran' => 'Bahasa Inggris',
            'jam_mulai' => '10:00:00',
            'jam_selesai' => '11:30:00',
        ]);

        Jadwal::create([
            'kelas' => 'kelas_2',
            'hari' => 'Rabu',
            'mata_pelajaran' => 'Biologi',
            'jam_mulai' => '08:00:00',
            'jam_selesai' => '09:30:00',
        ]);

        Jadwal::create([
            'kelas' => 'kelas_3',
            'hari' => 'Kamis',
            'mata_pelajaran' => 'Fisika',
            'jam_mulai' => '10:00:00',
            'jam_selesai' => '11:30:00',
        ]);
    }
}
