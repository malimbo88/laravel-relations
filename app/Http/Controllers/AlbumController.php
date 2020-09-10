<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Use Album model class
use App\Models\Album;

// Use Song model class
use App\Models\Song;

// Use Genre model class
use App\Models\Genre;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::all();

        return view("music.index", compact("albums"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        dd($album->genres);
        return view("music.show", compact("album"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {
        return view("music.edit", compact("album"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        // Validate $request data
        $request->validate([
          "title" => "required|max:255",
          "cover" => "required",
          "artist" => "required",
          "year" => "required|integer|max:2020",
          "description" => "required",
        ]);

        // All data from $request
        $data = $request->all();

        // Update data
        $album->update($data);

        // Redirect to View albums.show
        return redirect()->route("albums.show", $album);
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
}
