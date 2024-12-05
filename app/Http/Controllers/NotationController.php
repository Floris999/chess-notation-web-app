<?php

namespace App\Http\Controllers;

use App\Models\Notation;
use Illuminate\Http\Request;

class NotationController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        // Valideer de invoer
        $rules = [
            'event' => 'nullable|string|max:255',
            'date' => 'nullable|date',
            'round' => 'nullable|string|max:255',
            'board' => 'nullable|string|max:255',
            'section' => 'nullable|string|max:255',
            'opening' => 'nullable|string|max:255',
            'white_player' => 'nullable|string|max:255',
            'black_player' => 'nullable|string|max:255',
            'result_white_won' => 'nullable|string|max:255',
            'result_draw' => 'nullable|string|max:255',
            'result_black_won' => 'nullable|string|max:255',
            'white_signature' => 'nullable|string|max:255',
            'black_signature' => 'nullable|string|max:255',
        ];

        for ($i = 1; $i <= 50; $i++) {
            $rules["white_move_$i"] = 'nullable|string|max:255';
            $rules["black_move_$i"] = 'nullable|string|max:255';
        }

        $request->validate($rules);

        // Database opslaan
        $notation = new Notation();

        // Lege waarden vervangen met lege string
        $notation->event = $request->input('event') ?? '';
        $notation->date = $request->input('date', date('Y-m-d'));
        $notation->round = $request->input('round') ?? '';
        $notation->board = $request->input('board') ?? '';
        $notation->section = $request->input('section') ?? '';
        $notation->opening = $request->input('opening') ?? '';
        $notation->white_player = $request->input('white_player') ?? '';
        $notation->black_player = $request->input('black_player') ?? '';

        // Opslaan van de zetten
        $white_moves = [];
        $black_moves = [];
        for ($i = 1; $i <= 50; $i++) {
            $white_moves["white_move_$i"] = $request->input("white_move_$i") ?? '';
            $black_moves["black_move_$i"] = $request->input("black_move_$i") ?? '';
        }
        $notation->white_moves = json_encode($white_moves);
        $notation->black_moves = json_encode($black_moves);

        // Opslaan van de resultaten
        $notation->result_white_won = $request->has('result_white_won');
        $notation->result_draw = $request->has('result_draw') || (!$request->has('result_white_won') && !$request->has('result_black_won'));
        $notation->result_black_won = $request->has('result_black_won');
        $notation->white_signature = $request->input('white_signature') ?? '';
        $notation->black_signature = $request->input('black_signature') ?? '';

        $notation->save();

        return redirect()->back()->with('success', 'Notation saved successfully!');
    }
}
