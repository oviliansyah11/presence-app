<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $fillable = [
        'nisn', 'nama', 'tgl_lahir', 'jenis_kelamin', 'alamat', 'no_telpon', 'kelas_id', 'password'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
