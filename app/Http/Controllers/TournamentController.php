<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TournamentController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Tournament::class);
    }

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
        $user = Auth::user();
        return view('tournaments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = Auth::user()->id;
        $tounament = Tournament::create([
            'code' => $request->input('code'),
            'full_name' => $request->input('full_name'),
            'gender' => $request->input('gender'),
            'age' => $request->input('age'),
            'country' => $request->input('country'),
            'score_1' => $request->input('score_1'),
            'score_2' => $request->input('score_2'),
            'score_3' => $request->input('score_3'),
            'creator_id' => $userId]);
        return redirect()->route('tournaments.index')->with('success', 'Tournament created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tournament $tournament)
    {
        return view('tournaments.show', compact('tournament'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tournament $tournament)
    {
        $user = Auth::user();
        return view('tournaments.edit',['tournaments' => $tournament]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tournament $tournament)
    {
        $tournament->update([
            'code' => $request->input('code'),
            'full_name' => $request->input('full_name'),
            'gender' => $request->input('gender'),
            'age' => $request->input('age'),
            'country' => $request->input('country'),
            'score_1' => $request->input('score_1'),
            'score_2' => $request->input('score_2'),
            'score_3' => $request->input('score_3'),
            ]);
        return redirect()->route('tournaments.index')->with('success', 'Tournament updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tournament $tournament)
    {
        Tournament::destroy($tournament->id);
        return \redirect(route('tournaments.index'));
    }
}
