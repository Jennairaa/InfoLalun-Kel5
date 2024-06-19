<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    use HasFactory;

    protected $table = 'data';
    protected $primaryKey = 'id';   
    protected $fillable = [
        'lokasi',
        'tanggal',
        'jumlah_korban',
        'deskripsi',
        'foto' // Tambahkan kolom foto di sini
    ];
}

