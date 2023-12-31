<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::latest()->paginate(10);
        return [
            "c_one" => "",
            "c_two" => "",
            "c_three" => ""
        ];
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
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
 
        $players = Player::create($request->all());
        return [
            "c_one" => "",
            "c_two" => "",
            "c_three" => ""
        ];
    }
 
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $players
     * @return \Illuminate\Http\Response
     */
    public function show(Player $players)
    {
        return [
            "c_one" => "",
            "c_two" => "",
            "c_three" => ""
        ];
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $players
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $players)
    {
        //
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $players
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $players)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
 
        $blog->update($request->all());
 
        return [
            "c_one" => "",
            "c_two" => "",
            "c_three" => "",
            "msg" => "Player updated successfully"
        ];
    }
 
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player $players
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $players)
    {
        $players->delete();
        return [
            "c_one" => "",
            "c_two" => "",
            "c_three" => "",
            "msg" => "Player deleted successfully"
        ];
    }
}
