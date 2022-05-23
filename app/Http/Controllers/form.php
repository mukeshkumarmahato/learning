<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class form extends Controller
{
    function index(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo 'submit';
            die();
        }

        return view('form');
    }

    public function formStore(Request $request)
    {   
    
        // dump($request);
        // dd($request->get('mkesh','rajan'));
        dd($request->name);
        // dd(Input::get('name'));
        // dd($request->except('test'));
    }
}
