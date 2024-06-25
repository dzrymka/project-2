<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Donor extends Model
{
    use HasFactory;

    public function blood(): BelongsTo
    {
        return $this->belongsTo(Blood::class);
    }
}
