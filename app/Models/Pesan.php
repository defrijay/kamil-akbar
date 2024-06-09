<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    use HasFactory;
    protected $table = 't_pesan';
    public $timestamps = false;
    protected $fillable = ['nama_pengirim', 'email_pengirim', 'pesan'];
    protected $primaryKey = 'id_pesan';
}
