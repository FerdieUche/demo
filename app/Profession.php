<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $fillable = ['user_id', 'occupation', 'employment','income','skill','skill_level','sch_location','sch_name','title',
        'course_major','sch_year','cert','cert_year','web'];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
