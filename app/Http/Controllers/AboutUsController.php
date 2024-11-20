<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUs()
    {
        return view('about.about-us');  
    }

    public function ourValuesPage()
    {
        return view('about.nos-valeurs');  
    }

    public function fourValuesPage()
    {
        return view('about.les-quatres-v');  
    }

    public function commitmentsPage()
    {
        return view('about.nos-engagements');  
    }

    public function chairmanMessagePage()
    {
        return view('about.mot-du-president');  
    }
}
