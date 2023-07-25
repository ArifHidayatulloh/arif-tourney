<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Games;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $game = Game::all();
        return view('game.index',compact('game'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('game.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $imagePath = $request->file('image')->store('game_images','public');

        Game::create([
            'name' => $request->name,
            'image' => $imagePath,
        ]);

        return redirect()->route('game.index')->with('success','Game Added Successfully');
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
    public function edit(Game $game)
    {   
        return view('game.edit',compact('game'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);


        if($request->hasFile('image')){
            // Hapus Gambar
            Storage::disk('public')->delete($game->image);

            // Upload Gambar Baru
            $imagePath = $request->file('image')->store('game_images','public');
            $game->image = $imagePath;
        }

        $game->name = $request->name;
        $game->save();

        return redirect()->route('game.index')->with('success','Game Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        Storage::disk('public')->delete($game->image);
        $game->delete();
        return redirect()->route('game.index')->with('success','Game Deleted Successfully');
    }
}
