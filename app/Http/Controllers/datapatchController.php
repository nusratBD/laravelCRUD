<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\user;
class datapatchController extends Controller
{
    public function index(){
        return DB::select("select * from users");
    }
}
