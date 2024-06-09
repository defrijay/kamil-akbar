<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Motor;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 't_pelanggan';
    public $timestamps = false;
    protected $fillable = ['nama_pelanggan', 'no_telp', 'alamat_pelanggan'];
    protected $primaryKey = 'id_pelanggan';

    public function pemotor()
    {
        return $this->hasMany(Motor::class);
    }
}
