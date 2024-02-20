<?php

namespace App\Http\Controllers;

use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // this is the function that will call my web page
    public function index(){

        return view('dashboard', [
            'ideas' => Idea::orderBy('created_at', 'DESC')->paginate(5)
        ]);
    }



}
