<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\File;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('upload.main');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('upload.main');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        dd($request->all());
        $file = $request->file('file')[0];

        $file_name = time() . '_' . str_replace(' ', '_', $file->getClientOriginalName());

        if(!$request->name || $request->name == 'undefined'){
            $file->move('tmp/photos', $file_name);

            return json_encode(['tmp_photo_name' => $file_name]);
        }

        $file->move('uploads/photos', $file_name);

        Photo::create([
            'name' => $request->name,
            'path' => $file_name
        ]);

        return json_encode(['message' => 'File Uploaded'],200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * @param $name
     * @return string
     */
    public function deleteTempPhoto($name)
    {
        File::delete('tmp/photos/' . $name);
        return 'deleteing ' .  $name;
    }

    public function test(Request $request)
    {
        dd($request->all());
    }
}
