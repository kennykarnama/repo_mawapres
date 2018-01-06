<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserLoginController extends Controller
{
    //

    public function __construct(){
    	$this->middleware('guest:legal_users');
    }

    public function showLoginForm()
    {
    	# code...
    	return view('pages.login_page');
    }
}
