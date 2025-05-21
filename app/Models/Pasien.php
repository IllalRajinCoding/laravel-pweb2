<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $table = 'pasiens';
    protected $fillable = [
        'nama',
        'kode',
        'tmp_lahir',
        'tgl_lahir',
        'gender',
        'alamat',
        'email',
        'kelurahan_id',
    ];

    public function kelurahan()
    {
        return $this->belongsTo(Kelurahan::class, 'kelurahan_id');
    }
}
