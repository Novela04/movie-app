<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class genreController extends Controller
{
    public function index()
    {
        $genre = new Genre;
        $genres = $genre->getAllgenres();

        return view('genres.index', ['genres' => $genres]);
    }
}