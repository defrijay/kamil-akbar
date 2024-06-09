<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;
    protected $table = 't_pemesanan';
    public $timestamps = false;
    protected $fillable = ['nama_pelanggan', 'no_telp', 'alamat_pelanggan', 'tipe_motor', 'merk_motor', 'nama_paket', 'stnk', 'keluhan', 'jadwal', 'jam'];
    protected $primaryKey = 'id_pemesanan';
}
