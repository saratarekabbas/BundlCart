<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $blogs = [['title' => 'dhjhds', 'content'=> 'djdjdjdjd'], ['title' => 'ssss', 'content' => 'ddd']];
        return view('home', compact('blogs'));
    }
}
