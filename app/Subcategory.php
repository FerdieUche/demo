<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function category(){
        return $this->belongs_to('category');
    }
    public function Gigs(){
        return $this->belongs_to('');
    }

}
