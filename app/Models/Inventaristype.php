<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class InventarisType extends Model
{
    protected $table = 'inventaristypes';

    // Define relationship with Inventaris
    public function inventaris()
    {
        return $this->hasMany(Inventaris::class, 'inventaristype_id');
    }
}
