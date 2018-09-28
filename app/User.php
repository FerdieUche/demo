<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function people()
    {
        return $this->hasOne(Person::class, 'user_id');
    }

    public function professions()
    {
        return $this->hasOne(Profession::class, 'user_id');
    }
    public function Gigs()
    {
        return $this->hasOne(Gigs::class, 'user_id');
    }
}
