<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gigs;
class GigsController extends Controller
{
    /**Retrieve list of gigs**/
    public function index() {
        return Gigs::all();
    }

    /**Retrieve a particular gig**/
    public function show(Request $request, $id){

            $gig = Gigs::find($id);
        if(!$gig) {
            return response('Error in the log ' . $id, 403);
        }
            return response($gig, 201);
    }


    /**Update or save the record in the database**/
    public function update() {
        $gigs = Gigs::updateOrCreate(['user_id' => request('id')],[
            'gig_title' => request('gig_title'),
            'sub-category_id' => request('sub_category_id'),
            'basic_package_name' => request('basic_package_name'),
            'basic_package_description' => request('basic_package_description'),
            'basic_delivery_day' => request('basic_delivery_day'),
            'basic_price' => request('basic_price'),
            'standard_package_name' => request('standard_package_name'),
            'premium_package_name' => request('premium_package_name'),
            'standard_package_description' => request('standard_package_description'),
            'premium_package_description' => request('premium_package_description'),
            'standard_delivery_day' => request('standard_delivery_day'),
            'premium_delivery_day' => request('premium_delivery_day'),
            'standard_price' => request('standard_price'),
            'premium_price' => request('premium_price'),
            'user_id' => request('id'),
        ]);

        if(!($gigs)){
            return response('Error in the log', 403);
        }
        return response(($gigs),201);

    }

}
