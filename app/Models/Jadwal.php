<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwals'; // Nama tabel yang digunakan
    protected $fillable = ['kelas', 'hari', 'mata_pelajaran']; // Kolom yang diizinkan untuk diisi
}
