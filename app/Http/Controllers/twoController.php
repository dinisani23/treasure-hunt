<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;

class twoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/two/index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $latest_player = Player::orderBy('id', 'desc')->first();
        $latest_player->c_two = $request->two_score;
        $latest_player->save();

        return redirect()->action([codeController::class, 'index']);
    }
}
