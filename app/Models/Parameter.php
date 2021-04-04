<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
    use HasFactory;
    public function sample()
    {
        return $this->belongsTo(Sample::class, 'sample_id');
    }
    public function parameterType()
    {
        return $this->belongsTo(ParameterType::class, 'parameter_type_id');
    }
}
