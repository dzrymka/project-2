<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class relawan extends Model
{
    use HasFactory;

    protected $primaryKey = "id";
    protected $fillable = ['nama', 'umur', 'alamat', 'email', 'no_telp', 'awal_masuk', 'foto_rel', 'status'];
}
