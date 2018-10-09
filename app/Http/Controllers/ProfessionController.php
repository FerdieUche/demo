<?php

namespace App\Http\Controllers;

use App\Profession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfessionController extends Controller
{
    /**return all professions data from the database**/
    public function index() {
        return Profession::all();
    }

    /**find a particular profession's profile by id**/
    public function show(Request $request, $id) {
        $profession = Profession::find($id);
        if(!$profession) {
            return response('Error in the log ' . $id, 403);
        }
        return response($profession, 201);    }



    /**Update or save the record in the database**/
    public function update() {
        $profession = Profession::updateOrCreate(['user_id' => request('id')],[
        'occupation' => request('occupation'),
            'employment' => request('employment'),
            'income' => request('income'),
            'skill' => request('skill'),
            'skill_level' => request('skill_level'),
            'sch_location' => request('sch_location'),
            'sch_name' => request('sch_name'),
            'title' => request('title'),
            'course_major' => request('course_major'),
            'sch_year' => request('sch_year'),
            'cert' => request('cert'),
            'cert_year' => request('cert_year'),
            'web' => request('web'),
            'user_id' => request('id'),
        ]);

        if(!($profession)){
            return response('Error in the log', 403);
        }
        return response(($profession),201);

    }

    /**public function to delete**/
    public function destroy(Request $request, $id) {
        $person = Profession::where('user_id',Auth::user()->id)
            ->delete();
        return response()->json(['message'=>'Profession record successfully deleted with id ' . $person->id]);
    }


}
