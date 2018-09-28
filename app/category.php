<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function subcategory(){
        return $this->has_many('Subcategory');
    }
}
