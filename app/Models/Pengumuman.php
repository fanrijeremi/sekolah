<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table = 'pengumumans'; // Nama tabel yang digunakan
    protected $fillable = ['kelas', 'isi']; // Kolom yang diizinkan untuk diisi
}
