<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;

    protected $table = 'pengurus';
    protected $primaryKey = 'id_pengurus';
    protected $fillable = ['nama', 'gmail', 'password'];

    public function barang()
    {
        return $this->hasMany(barang::class, 'id_pengurus');
    }

    public function barangMasuk()
    {
        return $this->hasMany(Barang_Masuk::class, 'id_pengurus');
    }

    public function barangKeluar()
    {
        return $this->hasMany(barang_keluar::class, 'id_pengurus');
    }

}
