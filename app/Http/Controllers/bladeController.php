<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bladeController extends Controller
{
    //
    function blade(){
        $data=['Nusrat','Hurain','Tithi','Dipti','Koly','Sweety'];
        // return view('blade',['user'=>'Tithi']);
        return view('blade',['user'=>$data]);
    }
}
