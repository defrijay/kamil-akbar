<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $table = 't_paket';
    public $timestamps = false;
    protected $fillable = ['nama_paket', 'harga'];
    protected $primaryKey = 'id_paket';
}
