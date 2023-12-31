<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use DB; 

class scoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latest_player = Player::orderBy('id', 'desc')->first();
        $code = $latest_player->code;
        $score_one = $latest_player->c_one;
        $score_two = $latest_player->c_two;
        $score_three = $latest_player->c_three;
        $total_score = round((($score_one + $score_two + $score_three)/30)*100);
        $latest_player->total_score = $total_score;
        $latest_player->save();
        
        return view('/score/index', compact('code','score_one', 'score_two', 'score_three', 'total_score'));
    }
}
