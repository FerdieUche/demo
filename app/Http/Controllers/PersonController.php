<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Person;
class PersonController extends Controller
{
    /**return all persons data from the database**/
    public function FetchAllPeople() {
        return Person::all();
    }


    /**find a particular person's profile by id**/
    public function FetchSinglePerson(Request $request, $id) {
        $person = Person::find($id);
        if(!$person) {
            return response('Error in the log ' . $id, 403);
        }
        return response($person, 201);    }


    /**Update or save the record in the database**/
    public function UpdatePerson() {
        $person = Person::updateOrCreate(['user_id' => request('id')],[
            'firstname' => request('firstname'),
            'surname' => request('surname'),
            'description' => request('description'),
            'country' => request('country'),
            'category' => request('category'),
            'lang' => request('lang'),
            'proficiency' => request('proficiency'),
            'phone' => request('phone'),
            'user_id' => request('id'),
        ]);

        if(!($person)){
                    return response('Error in the log', 403);
                }
        return response(($person),201);

    }


    /**public function to delete**/
    public function destroy(Request $request, $id) {
        $person = Person::where('user_id',Auth::user()->id)
        ->delete();
    }

}
