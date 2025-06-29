<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Kampus extends Model
{
    protected $table = 'kampus';
    protected $fillable = [
        'nama_kampus', 'alamat_lengkap', 'no_telpon',
        'kategori', 'latitude', 'longitude', 'jurusan'
    ];
}
