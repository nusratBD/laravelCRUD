<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class userController extends Controller
{
    public function insert(Request $req){
       $user = new user;
       $user->name = $req->name;
       $user->email = $req->email;
       $user->password = $req->password;
       $user->save();
       return redirect('read');
    }
    public function read(){
        $data = user::all();
        return view('read',['data'=>$data]);
    }
    public function delete($id){
        $data = user::find($id);
        $data->delete();
        return redirect('read');

    }
    public function edit($id){
        $data = user::find($id);
        return view('edit',['data'=>$data]);
    }
    public function editSuccess(Request $req){
        $data = user::find($req->id);
        $data->name=$req->name;
        $data->email=$req->email;
        $data->save();
        return redirect('read');
    }
}
