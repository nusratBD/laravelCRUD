<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewController extends Controller
{
    public function userView($user){
        return view('about',['user'=>$user]);
        // return view('about',['name'=>"Nusrat Hurain"]);
    }
}
