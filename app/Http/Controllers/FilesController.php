<?php
//
//namespace App\Http\Controllers;
//use Illuminate\Http\Request;
//use App\File;
//use Illuminate\Support\Facades\Input;
////use Validator;
//use Illuminate\Support\Facades\Storage;
//class FilesController extends Controller
//{
//    /**
//     * Display a listing of the resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function index()
//    {
//        return view('file');
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     *
//     * @return \Illuminate\Http\Response
//     */
//    public function create()
//    {
//        //
//    }
//
//    /**
//     * List Uploaded files
//     *
//     * @return array
//     */
//    public function listFiles()
//    {
//        return ['files' => File::all()];
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return \Illuminate\Http\Response
//     */
//    public function store(Request $request)
//    {
//        $user = new file;
//
//        $user->title = input::get('name');
//        if (input::hasFile('image')){
//            $file=Input::file('image');
//            $file->move(public_path(). '/',$file->getClientOriginalName());
//
//            $user->name = $file->getClientOriginalName();
//            $user->size = $file->getClientSize();
//            $user->type = $file->getClientMimeType();
//        }
//
//        $user->save();
//        return 'data saved in database';
//    }
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function edit($id)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//
//    public function update(Request $request)
//    {
////        $validator = Validator::make($request->file(), [
////            'image_file' => 'required|image|max:2000',
////        ]);
////
////        if ($validator->fails()) {
////
////            $errors = [];
////            foreach ($validator->messages()->all() as $error) {
////                array_push($errors, $error);
////            }
////
////            return response()->json(['errors' => $errors, 'status' => 400], 400);
////        }
//
//        $file = File::updateOrCreate(['user_id' => request('id')],[
//            'name' => $request->file('image_file')->getClientOriginalName(),
//            'type' => $request->file('image_file')->extension(),
//            'size' => $request->file('image_file')->getClientSize(),
//        ]);
//
//        $request->file('image_file')->move(public_path(). '/',$file->getClientOriginalName());
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function destroy($id)
//    {
//        //
//    }
//
//    /**
//     * Delete existing file from the server
//     *
//     * @param Request $request
//     *
//     * @return \Illuminate\Http\JsonResponse
//     */
//    public function delete(Request $request)
//    {
//        Storage::delete(public_path(). '/',$file->getClientOriginalName());
//
//        File::find(['user_id' => request('id')])->delete();
//
//        return response()->json(['errors' => [], 'message' => 'File Successfully deleted!', 'status' => 200], 200);
//    }
//}


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Validator;

class FilesController extends Controller
{
    public function update(Request $request)
    {
        $validator = Validator::make($request->file(), [
            'image_file' => 'required|image|max:2000',
        ]);

        if ($validator->fails()) {

            $errors = [];
            foreach ($validator->messages()->all() as $error) {
                array_push($errors, $error);
            }

            return response()->json(['errors' => $errors, 'status' => 400], 400);
        }

        $file = File::updateOrCreate(['user_id' => request('id')],[
            'name' => $request->file('image_file')->getClientOriginalName(),
            'type' => $request->file('image_file')->extension(),
            'size' => $request->file('image_file')->getClientSize(),
        ]);

        $request->file('image_file')->move(public_path(). '/',$file->getClientOriginalName());
    }

    public function deleteImage($filename)
    {
        File::delete('uploads/' . $filename);
    }
}