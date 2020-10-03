<?php

namespace App\Http\Controllers;

class FilmsController extends Controller
{
    public function index()
    {
        return view('admin.films.index');
    }

}
