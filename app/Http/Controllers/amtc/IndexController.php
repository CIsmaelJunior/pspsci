<?php

namespace App\Http\Controllers\amtc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Speaker;

class IndexController extends Controller
{
    public function index()
    {
        $speakers = Speaker::all();

        return view('amtc24.index', compact('speakers'));
    }
}
