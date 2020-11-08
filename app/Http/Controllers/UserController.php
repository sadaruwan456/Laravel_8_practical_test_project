<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
//    function getdata(Request $req){
//        $req->validate([
//            'username'=>'required | max:10',
//            'password'=>'required |min:5'
//        ]);
//        return $req->input();
//    }


function getdata(){
    // $collection=User::paginate(5);
    $collection=User::all();
    return view('user',['collection'=>$collection]);
}

function delete($id){

// $user=User::find($id);
// $user->delete();
return 'Dilanka Sadaruwan'.$id;


}
}
