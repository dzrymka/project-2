<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $fillable = ['nama', 'no_telp', 'jumlah_mas', 'tgl_keg', 'foto_keg', 'ket_keg'];
}
