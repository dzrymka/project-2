<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class inventaris extends Model
{
    use HasFactory;
    protected $primaryKey = "id";
    protected $fillable = ['kode_bar', 'nama_bar', 'inventaristype_id', 'des_barang', 'jumlah_bar', 'foto_bar', 'status'];


    public function inventaristype()
    {
        return $this->belongsTo(InventarisType::class, 'inventaristype_id');
    }
}
