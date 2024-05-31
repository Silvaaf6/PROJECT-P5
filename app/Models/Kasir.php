<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasir extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'nama_kasir', 'jenis_kelamin', 'alamat', 'no_telepon'];
    public $timestamps = true;

    public function transaksi()
    {
        return $this->hasMany(Transaksis::class);
    }
}
