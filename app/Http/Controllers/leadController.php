<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use DB; 

class leadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lead()
    {
    $players = Player::orderBy('total_score', 'desc')->paginate(20);

    return view('score.lead', compact('players'));
    }

}
