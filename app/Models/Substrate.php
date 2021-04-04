<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Substrate extends Model
{
    use HasFactory;
    public function samples()
    {
        return $this->hasMany(Sample::class, 'substrate_id');
    }
}
