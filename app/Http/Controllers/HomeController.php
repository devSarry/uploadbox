<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{

    public function index()
    {
        $data['portfolio'] = Portfolio::all();

        return view('home.index', compact('data'));
    }
}
