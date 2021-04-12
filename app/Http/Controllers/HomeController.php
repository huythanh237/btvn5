<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $name = [
            'Bootstrap 4 Website Example 1',
            'Bootstrap 4 Website Example 2',
            'Bootstrap 4 Website Example 3',
            'Bootstrap 4 Website Example 4',
        ];
        return view('home', ['name' => $name]);
    }
}
