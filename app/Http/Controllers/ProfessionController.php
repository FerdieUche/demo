<?php

namespace App\Http\Controllers;

use App\Profession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfessionController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'occupation'=> 'required',
            'employment'=> 'required',
            'income' => 'required',
            'skill' => 'required',
            'skill_level' => 'required',
            'sch_location' => 'required',
            'sch_name' => 'required',
            'title' => 'required',
            'course_major' => 'required',
            'sch_year' => 'required',
            'cert' => 'required',
            'cert_year' => 'required',
            'web' => 'required',
        ]);

        return Profession::create([
            'occupation'        => request('occupation'),
            'employment'        => request('employment'),
            'income'            => request('income'),
            'skill'              => request('skill'),
            'skill_level'       => request('skill_level'),
            'sch_location'             => request('sch_location'),
            'sch_name'             => request('sch_name'),
            'title'             => request('title'),
            'course_major'             => request('course_major'),
            'sch_year'             => request('sch_year'),
            'cert'             => request('cert'),
            'cert_year'             => request('cert_year'),
            'web'             => request('web'),
            'user_id'           => request('id')
        ]);
    }


    //return all or a particular data from the database
    public function index($id = null) {
        if ($id == null) {
            return Profession::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    //find a particular employee by id
    public function show($id) {
        return Profession::find($id);
    }

    //Update the record in the database
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
    }

    //public function to delete
    public function destroy(Request $request, $id) {
        $person = Profession::where('user_id',Auth::user()->id)
            ->delete();
        return response()->json(['message'=>'Profession record successfully deleted with id ' . $person->id]);
    }


}
