<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class codeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latest_player = Player::orderBy('id', 'desc')->first();
        $one = $latest_player->c_one;
        $two = $latest_player->c_two;
        $three = $latest_player->c_three;
        //$game = array();
        $game_one = 'unplayed';
        $game_two = 'unplayed';
        $game_three = 'unplayed';

        if ($one == null || $two == null || $three == null) {
            if ($one != null){
                //return view('/new_qr/index', compact(''));
                //$joinOne = array($one);
                //$game = array_merge($game, $joinOne);
                $game_one = 'played';
            }
            if ($two != null){
                //$joinTwo = array($two);
                //$game = array_merge($game, $joinTwo);
                $game_two = 'played';
            }
            if ($three != null){
                //$joinThree = array($three);
                //$game = array_merge($game, $joinThree);
                $game_three = 'played';
            }
            //return view('/new_qr/index');
            return view('/new_qr/index', compact('game_one', 'game_two', 'game_three'));
        }
        else {
            return redirect()->action([scoreController::class, 'index']);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*if(Request::ajax()) {
            $code = $request->Player()->code;
            die;
        }

        dd($data);*/

        /*
        // Get the user ID from the request
        $userId = $request->Player()->id;

        // Generate a 4-digit random code
        $code = rand(1000, 9999);

        // Save the code and user ID in the database
        DB::table('qr_codes')->insert([
            'id' => $userId,
            'code' => $code,
        ]);

        // Get the URL of the QR code the user scanned earlier
        $qrUrl = $request->input('qr_url'); //element name should be qr_url

        // Redirect the user to the QR code URL with the code appended as a query parameter
        return redirect()->to($qrUrl . '?code=' . $code);*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*public function fetchExample(Request $request){
        $name = $request->get('name');
        $number = $request->get('number');
        return view ('oi');
    }*/
    public function store(Request $request)
    {
        //$code = rand(1000, 9999);
        //$code = $request->json('ucode');
        //$model = new Player();
        /*$scanned_url = $request->validate([
            'scanned_text' => 'required',
        ]);*/

        //$model = new Player();
        //$model->qr = $scanned_url['scanned_text'];
        //model->save();

        //Player::create($request->all());
        //Player::create(['qr' => $]);

        
        //$player = new Player;
        $latest_player = Player::orderBy('id', 'desc')->first();
        $latest_player->qr = $request->scanned_text;
        $latest_player->save();

        return $this->reroute();

        //check value name & phone
        //pergi form return view page register or reroute
        /*$name = $player->name;
        if ($name == 'default'){
            return view('/player/create');
        }
        else {
            return $this->reroute();
        }*?


        //return redirect()->route('new_qr-reroute');
        //$url = $request->input('scanned_text');
        //Player::create(['scanned_text' => $url]);
        //$model->save();
        //$code = $request->get('code');
        /*$code = rand(1000, 9999);
        $data = ['code' => $code,];
        DB::table('player')->insert($data);*/
    }
    //function save nama&phone

    public function reroute()
    {
        //save nama & phone
        $latest_player = Player::orderBy('id', 'desc')->first();
        $codes = $latest_player->code;
        $one = $latest_player->c_one;
        $two = $latest_player->c_two;
        $three = $latest_player->c_three;

        if ($one == null || $two == null || $three == null){
            if ($codes == null){
                $code = rand(1000, 9999);
                $latest_player->code = $code;
                $latest_player->save();
    
                //$url = Player::orderBy('id', 'desc')->first();
                $url = $latest_player->qr;
                $go = $url . '?code=' . $code;
                return redirect($go);
            }
            else {
                $code = $latest_player->code;
                $url = $latest_player->qr;
                $go = $url . '?code=' . $code;
                return redirect($go);
            }
        }
        else {
            //view result
            return redirect()->action([scoreController::class, 'index']);
        }
        
        //Player::create(['code' => $code]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        //
    }
}
