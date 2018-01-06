<?php

namespace App\Http\Controllers\visitors;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    //

    public function indexHome()
    {
    	# code...
    	return view('pages/landing_page');
    }
}
