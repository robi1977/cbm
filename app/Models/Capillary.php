<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sample;

class Capillary extends Model
{
    use HasFactory;

    public function samples()
    {
        return $this->hasMany(Sample::class, 'capillary_id');
    }
    public function material()
    {
        return $this->belongsTo(CapillaryMaterial::class, 'capillary_material');
    }
}
