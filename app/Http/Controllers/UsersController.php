<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    //

    public function index(){

        return json_encode(User::all(),true);
    }

    public function user(User $user){

        return $user;

    }

    public function create(Request $request){

        $name = $request->name;
        $email = $request->email;
        $pass = $request->password;

        $user = new User();
        $user->password = Hash::make($pass);
        $user->email = $email;
        $user->name = $name;
        $user->save();

        return json_encode("user sucessfully registered");
    }

    public function delete(User $user){

        $user->delete();

        return "user deleted successfully";
    }
}
