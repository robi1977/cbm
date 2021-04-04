<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function samples()
    {
        return $this->hasMany(Sample::class, 'user_id');
    }
    public function can_writte()
    {
        $role = $this->role;
        if($role =='admin' || $role =='writter'){
            return true;
        }
        return false;
    }
    public function can_edit()
    {
        $role = $this->role;
        if($role == 'admin' || $role=='reviewer'){
            return true;
        }
        return false;
    }
    public function is_admin()
    {
        return ($this->role == 'admin')?true:false;
    }
}
