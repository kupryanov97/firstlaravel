<?php

namespace App\Http\Controllers\Api\V1;
 
use App\Film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
 
class FilmsController extends Controller
{
    public function index()
    {
        return Film::all();
    }
 
    public function show($id)
    {
        return Film::findOrFail($id);
    }
 
    public function update(Request $request, $id)
    {
        $film = Film::findOrFail($id);
        $film->update($request->all());
 
        return $film;
    }
 
    public function store(Request $request)
    {
        $film = Film::create($request->all());
        return $film;
    }
 
    public function destroy($id)
    {
        $film = Film::findOrFail($id);
        $film->delete();
        return '';
    }
}