<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pelanggan;

class Motor extends Model
{
    use HasFactory;
    protected $table = 't_motor';
    public $timestamps = false;
    protected $fillable = ['tipe_motor', 'merk_motor', 'nama_pelanggan'];
    protected $primaryKey = 'id_motor';
    
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
}
