<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class saveController extends Controller
{
    function saveData(Request $req){
        // return 'ee';
        $user = new user;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $user->save();
        return redirect('data');
    }
  
}
