<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Portfolio;
use DebugBar;
use Illuminate\Http\Request;

use App\Http\Requests;
use Kris\LaravelFormBuilder\FormBuilder;

class PortfolioController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['portfolios'] = Portfolio::all();


        return view('back.portfolios.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormBuilder $formBuilder)
    {
        $data['form'] = $formBuilder->create('PortfolioForm', [
            'method' => 'POST',
            'url'    => url('portfolios')
        ]);

        return view('back.portfolios.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validate the data
        $this->validate($request, [
            'photo_name'  => 'image',
            'title'       => 'required',
            'date'        => 'required',
            'description' => 'required'
        ]);
        //Rename the photo
        $photo = Photo::fromFile($request->file('file')[0]);

        //store the data
        $portfolio = Portfolio::create([
            'title'       => $request->input('title'),
            'sub_title'   => $request->input('sub_title'),
            'client'      => $request->input('client'),
            'date'        => $request->input('date'),
            'service'     => $request->input('service'),
            'description' => $request->input('description'),
        ]);


        $portfolio->addPhoto($photo);

        //return to index
        return redirect('portfolios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
