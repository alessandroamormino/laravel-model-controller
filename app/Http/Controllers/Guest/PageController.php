<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
      // mi memorizzo tutti dati dei movies in un oggetto che prendo dal db
      $movies = Movie::all();

      return view('home', compact('movies'));
    }
}
