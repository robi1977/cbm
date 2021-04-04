<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Sample;

class Alloy extends Model
{
    use HasFactory;
    public function samples()
    {
        return $this->hasMany(Sample::class, 'alloy_id');
    }
}
