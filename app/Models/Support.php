<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;
    public function samples()
    {
        return $this->hasMany(Sample::class, 'support_id');
    }
}
