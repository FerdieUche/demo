<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table ='person';

    protected $fillable = ['user_id', 'firstname', 'description','surname','avatar','lang','proficiency','phone' ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
