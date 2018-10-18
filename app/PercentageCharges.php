<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PercentageCharges extends Model
{
    protected $table ='charges';

    protected $fillable = ['id', 'name', 'percentageCharge'];

}
