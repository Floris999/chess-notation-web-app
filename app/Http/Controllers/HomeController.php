<?php

namespace App\Http\Controllers;

use App\Models\Notation;

class HomeController extends Controller
{
    public function index()
    {
        // Haal de statistieken op
        $stats = $this->stats();

        // Geef de statistieken door aan de view
        return view('home', $stats);
    }

    public function stats()
    {
        // Haal de statistieken op uit de database
        $gamesWon = Notation::where('result_white_won', true)->orWhere('result_black_won', true)->count();
        $gamesLost = Notation::where('result_white_won', false)->where('result_black_won', false)->where('result_draw', false)->count();
        $gamesDraw = Notation::where('result_draw', true)->count();

        // Return de statistieken als een array
        return compact('gamesWon', 'gamesLost', 'gamesDraw');
    }
}