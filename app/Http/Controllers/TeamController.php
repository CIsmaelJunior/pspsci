<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::actifs()->get();
        return view('notre-equipe', compact('teams'));
    }

    public function show(Team $team)
    {
        return view('biographie', compact('team'));
    }
}
