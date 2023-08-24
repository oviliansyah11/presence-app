<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;
    // protected $guarded = 'siswa';
    protected $fillable = [
        'nisn', 'nama', 'tgl_lahir', 'jenis_kelamin', 'alamat', 'no_telpon', 'kelas_id', 'password'
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
