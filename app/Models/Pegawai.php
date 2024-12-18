<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
     protected $fillable = [
        'nama',
        'nip',
        'foto',
        'alamat',
        'tempat_lahir',
        'tgl_lahir',
        'telp',
    ];
}
