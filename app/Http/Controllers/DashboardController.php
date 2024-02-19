<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // this is the function that will call my web page
    public function index(){

        $users = [
            [
                'name' => 'Alex',
                'age' => '30'
            ],
            [
                'name' => 'Dan',
                'age' => '25'
            ],
            [
                'name' => 'John',
                'age' => '37'
            ]
        ];

        return view(
            'dashboard',
            [
                'users' => $users
            ]
        );
    }



}
