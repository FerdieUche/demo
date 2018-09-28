<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table ='person';

    protected $fillable = ['id', 'user_id', 'firstname', 'description','surname','avatar','lang','country','category','proficiency','phone' ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
