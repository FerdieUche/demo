<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;


class CategoryController extends Controller
{
    public function update(){
        $input = Input::get('option');
        $category = category::find($input);
        $subcategory = $category->subcategory();
        return Response::eloquent($subcategory->get(['id','name']));
    }
}
