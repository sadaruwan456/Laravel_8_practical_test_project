<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
   function index(Request $req){

    $user = new User;
    $user ->name=$req->name;
    $user ->email=$req->email;
    $user ->address=$req->address;
    $user->save();
    return redirect('/user');

   }

   function delete($id){
    $user = User::find($id);
    $user->delete();

// echo 'id='.$id;
    return redirect('/user');

   }

   function editData($id){

    $user=User::find($id);
    return view('edite',['data'=>$user]);
   }

   function updateDate(Request $req){

    $user =User::find($req->id);

    $user->name=$req->name;
    $user->email=$req->email;
    $user->address=$req->address;
    $user->save();

    return redirect('/user');
   }
}
