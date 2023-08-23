<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    // protected $guarded = [];
    protected $fillable = [
        'nama_kelas'
    ];

    public function siswa()
    {
        return $this->hasMany(Kelas::class);
    }
}
