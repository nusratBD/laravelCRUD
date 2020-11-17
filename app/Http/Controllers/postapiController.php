<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class postapiController extends Controller
{
    public function index(Request $req){
        $user = new user;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=$req->password;
        $result = $user->save();
if($result){
    return ["Result"=>"Data Saved Successfully."];
}
else{
    return ["Result"=>"Data Not Saved. Try Again."];
}
}
}
