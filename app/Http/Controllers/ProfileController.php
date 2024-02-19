<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    // this is the seconf function that will call the profile page
    public function index(){
        return view('profile');
    }
}
