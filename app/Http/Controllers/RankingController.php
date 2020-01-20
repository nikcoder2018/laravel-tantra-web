<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ranking;
use App\User;

class RankingController extends Controller
{
    public function index()
    {
        $ranking = Ranking::select('UserID', 'CharacterName', 'Trimurity', 'Tribe', 'MBrahmanPoint', 'BrahmanPoint', 'GuildName', 'CharacterLevel')->orderBy('MBrahmanPoint', 'desc')->limit(24)->get();

        $data = array(
            'title'   => 'TOP 25 Monthly Ranking',
            'ranking' => $ranking,
            'count'   => Ranking::count(),
            'increment' => 1
        );
        return view('pages.ranking')->with($data);
    }
}
