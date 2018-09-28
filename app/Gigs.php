<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gigs extends Model
{
    protected $table ='gigs';

    protected $fillable = ['user_id', 'gig_title', 'sub_category_id	', 'basic_package_name', 'basic_package_description',
        'basic_delivery_day', 'basic_price', 'standard_package_name', 'premium_package_name', 'standard_package_description',
        'premium_package_description', 'standard_delivery_day', 'premium_delivery-day', 'standard_price', 'premium_price' ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function subcategory()
    {
        return $this->hasMany(Subcategory::class, 'sub-category_id');
    }

}
