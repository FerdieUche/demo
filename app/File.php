<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
        'name',
        'size',
        'type'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
