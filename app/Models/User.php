<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'address',
        'phone',
        'password',
        'avatar',
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

    public function posts()
    {
        return $this->hasMany('App\Models\Post', 'user_id');
    }

    public function properties()
    {
        return $this->hasMany('App\Models\Property', 'user_id');
    }

    public function rentContract()
    {
        return $this->hasMany('App\Models\RentContract', 'lessee_id');
    }

    public function roleUser()
    {
        return $this->hasMany('App\Models\RoleUser', 'user_id');
    }
    
    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'user_id');
    }
}
