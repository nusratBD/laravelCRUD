<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function index(){
        return ["name"=>"Nusrat Hurain", "email"=>"nusrat.hurain15@gmail.com", "address"=>"Lakshmipur"];
    }
}
