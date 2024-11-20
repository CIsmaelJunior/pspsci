<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adhesion;

class Adhesioncontroller extends Controller
{
    public function index()
    {
        $adhs = Adhesion::all();
        return view('admin.liste-adhesions', compact('adhs'));
    }

    public function update()
    {
        
    }
}
