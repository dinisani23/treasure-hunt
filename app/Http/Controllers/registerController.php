<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Auth;

class registerController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $player = new Player;
        $player->name = $request->name;
        $player->phone = $request->phone;
        $player->save();

        $player_id = $player->id;

        $game_one = 'unplayed';
        $game_two = 'unplayed';
        $game_three = 'unplayed';

        return view('/new_qr/index', compact('player_id', 'game_one', 'game_two', 'game_three'));
    }
}
