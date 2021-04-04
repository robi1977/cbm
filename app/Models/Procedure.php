<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
    use HasFactory;
    public function samples()
    {
        return $this->hasMany(Sample::class, 'procedure_id');
    }
}
