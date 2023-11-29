<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

class TournamentController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $tournaments = Tournament::all();
        return view('tournaments.index', compact('tournaments'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tournaments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Tournament::create($request -> all());
        return redirect() -> route('tournaments.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tournament $tournaments)
    {
        return view('tournaments.show', compact('tournaments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tournament $tournaments)
    {
        return view('tournaments.edit', compact('tournaments'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tournament $tournaments)
    {
        $request -> validate([
            'code' => 'required',
            'full_name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'country' => 'required',
            'score_1' => 'required',
            'score_2' => 'required',
            'score_3' => 'required',

        ]);

        $tournaments -> update([
            'code' => $request-> input('code'),
            'full_name' => $request-> input('full_name'),
            'gender' => $request-> input('gender'),
            'age' => $request-> input('age'),
            'country' => $request-> input('country'),
            'score_1' => $request-> input('score_1'),
            'score_2' => $request-> input('score_2'),
            'score_3' => $request-> input('score_3'),
        ]);


        return redirect()->route('tournaments.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tournament $tournaments)
    {
        $tournaments->delete();
        return redirect()->route('tournaments.index');
    }
}
