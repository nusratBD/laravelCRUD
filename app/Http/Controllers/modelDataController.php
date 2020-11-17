<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class modelDataController extends Controller
{
    public function getData(){
        return user::all();
    }
}
