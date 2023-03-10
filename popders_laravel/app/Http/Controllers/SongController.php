<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class SongController extends Controller
{
    public function index()
    {   
        $songs = Song::all();
        return view('/playlist', compact('songs'));
    }

    public function create()
    {
        return view('addSong');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'require|image|max:2048'
        ]);

        $songs = new Song();

        $songs->title = $request->title;
        $songs->artist = $request->artist;
        $songs->genre = $request->genre;
        $songs->url = $request->url;
        $songs->image = $request->image;

        $songs->save();

        return redirect()->route('songDescription.show', $songs);
    }

    public function show($id_song)
    {   
        $songs = Song::find($id_song);  
        return view('songDescription', compact('songs'));
    }

    public function edit(Song $songs) 
    {   
        return view('editSong', compact('songs'));
    }

    // public function update(Request $request, Song $song)
    // {
    //     $songs = new Song();

    //     $songs->title = $request->title;
    //     $songs->artist = $request->artist;
    //     $songs->genre = $request->genre;
    //     $songs->url = $request->url;
    //     $songs->image = $request->image;

    //     $songs->save();

    //     return redirect()->route('songDescription');
    // }

    
}

?>