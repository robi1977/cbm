<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    public function sample()
    {
        return $this->belongsTo(Sample::class, 'sample_id');
    }
    public function link_category()
    {
        return $this->belongsTo(LinkCategory::class, 'link_cetegory_id');
    }
}
