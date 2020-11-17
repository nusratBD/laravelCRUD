<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class getapiController extends Controller
{
    public function index(){
        return user::all();
}
}
