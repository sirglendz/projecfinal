<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }
    // public function about(){
    //     $names = [];
    //     return view('about', [
    //         'names' => $names 
    //     ]);
    // }
    // public function skills(){
    //     return view('skills');
    // }
    // public function contact(){
    //     return view('contact');
    // }
    // public function portfolio(){
    //     return view('portfolio');
    // }
}
