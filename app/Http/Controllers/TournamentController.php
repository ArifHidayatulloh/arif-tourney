<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tournament = Tournament::all();
        return view('tournament.index',compact('tournament'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tournament.create',[
            'game' => Game::all()
        ]);
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
            'game_id' => 'required',
            'tournament_name' => 'required',
            'description' => 'required',
            'tournament_detail' => 'required',
            'reward' => 'required',
            'regstration_detail' => 'required',
            'contact_person' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $imagePath = $request->file('image')->store('tournament_images','public');

        Tournament::create([
            'game_id' => $request->game_id,
            'tournament_name' => $request->tournament_name,
            'description' => $request->description,
            'tournament_detail' => $request->tournament_detail,
            'reward' => $request->reward,
            'regstration_detail' => $request->regstration_detail,
            'contact_person' => $request->contact_person,
            'image' => $imagePath,
        ]);

        return redirect()->route('tournament.index')->with('success','Tournamen Added Succesfully');
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
    public function edit(Tournament $tournament)
    {
        return view('tournament.edit',[
            'tournament' => $tournament,
            'game' => Game::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tournament $tournament)
    {   
        $request->validate([
            'game_id' => 'required',
            'tournament_name' => 'required',
            'description' => 'required',
            'tournament_detail' => 'required',
            'reward' => 'required',
            'regstration_detail' => 'required',
            'contact_person' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        if($request->hasFile('image')){
            Storage::disk('public')->delete($tournament->image);
            $imagePath = $request->file('image')->store('tournament_images','public');
            $tournament->image = $imagePath;

        }

        $tournament->game_id = $request->game_id;
        $tournament->tournament_name = $request->tournament_name;
        $tournament->description = $request->description;
        $tournament->tournament_detail = $request->tournament_detail;
        $tournament->reward = $request->reward;
        $tournament->regstration_detail = $request->regstration_detail;
        $tournament->contact_person = $request->contact_person;
        $tournament->save();

        return redirect()->route('tournament.index')->with('success','Tournamen Updated Succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tournament $tournament)
    {
        Storage::disk('public')->delete($tournament->image);
        $tournament->delete();
        return redirect()->route('tournament.index')->with('success','Tournamen Deleted Succesfully');
    }
}
