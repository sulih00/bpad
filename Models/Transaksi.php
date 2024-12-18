<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\KategoriJenis;
use App\Models\KategoriKendaraan;
use App\Models\KategoriInstansi;


class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'foto',
        'nopol',
        'merk',
        'user_id',
        'kendaraans_id',
        'jenis_id',
        'instansi_id',
        'tahun',
    ];

    public function User(): ManyToMany
{
    return $this->ManyToMany(User::class, 'user_id');
}

public function Jenis(): ManyToMany
{
    return $this->ManyToMany(KategoriJenis::class, 'jenis_id');
}

public function Kendaraan(): ManyToMany
{
    return $this->ManyToMany(KategoriKendaraan::class, 'kendaraans_id');
}

public function Instansi(): ManyToMany
{
    return $this->ManyToMany(KategoriInstansi::class, 'instansi_id');
}

}
