<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
     
        $movies = Movie::all();


        //dd($movies);




        return view('home', compact('movies'));
    }

    public function query1(){

        $movies = Movie::where('date', '>', '1990')->get();
        //dd($movies);
        return view('query1', compact('movies'));
    }

    public function query2(){

        $movies = Movie::where('vote', '>', 8)->orderBy('title')->get();

        return view('query2', compact('movies'));
    }
}