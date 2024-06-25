<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Blood extends Model
{
    use HasFactory;

    public function blood_stock(): HasOne
    {
        return $this->hasOne(BloodStock::class);
    }


    public function donor(): HasMany
    {
        return $this->hasMany(Donor::class);
    }
}
