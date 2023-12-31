<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class apiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Player::get();
        return response()->json($user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('player')
                ->select('id', 'code', 'total_score')
                ->get();
        $json = json_encode($data);

        return response($json)
            ->header('Content-Type', 'application/json')
            ->header('Content-Disposition', 'attachment; filename=treasure_hunt_data.json');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        $countScore1 = DB::table('player')
                    ->whereBetween('c_one', [1, 10])->count();
        $countScore2 = DB::table('player')
                    ->whereBetween('c_two', [1, 10])->count();
        $countScore3 = DB::table('player')
                    ->whereBetween('c_three', [1, 10])->count();
        
        $count = [
            [
                'game_one' => $countScore1,
                'game_two' => $countScore2,
                'game_three' => $countScore3
            ]
        ];
        
        $json = json_encode($count);

        return response($json)
            ->header('Content-Type', 'application/json')
            ->header('Content-Disposition', 'attachment; filename=treasure_hunt_count_data.json');
    }
}
