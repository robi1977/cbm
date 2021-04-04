<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Alloy;

class Sample extends Model
{
    use HasFactory;

    public function alloy()
    {
        return $this->belongsTo(Alloy::class, 'alloy_id');
    }
    public function capillary()
    {
        return $this->belongsTo(Capillary::class, 'capillary_id');
    }
    public function equipment()
    {
        return $this->belongsTo(Equipment::class, 'equipment_id');
    }
    public function links()
    {
        return $this->hasMany(Link::class, 'sample_id');
    }
    public function parameters()
    {
        return $this->hasMany(Parameter::class, 'sample_id');
    }
    public function procedure()
    {
        return $this->belongsTo(Procedure::class, 'procedure_id');
    }
    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
    public function substrate()
    {
        return $this->belongsTo(Substrate::class, 'substrate_id');
    }
    public function support()
    {
        return $this->belongsTo(Support::class, 'support_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}