<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $food=food::all();
        return view('welcome', compact('food'));
    }
    public function fallback(){
        $food=food::all();
        return redirect()->back();
    }
}
