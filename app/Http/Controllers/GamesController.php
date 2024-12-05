<?php

namespace App\Http\Controllers;

use App\Models\Notation;

class GamesController extends Controller
{
    public function index()
    {
        $notations = Notation::all();
        return view('games', compact('notations'));
    }
}
