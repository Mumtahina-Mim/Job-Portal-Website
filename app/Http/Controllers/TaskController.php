<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function create(){
        return view('home'); 
    }

    public function store(Request $request){
        $title= $request->get('title');
        echo $title;
    }
}
