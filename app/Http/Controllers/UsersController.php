<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //

    public function index(){

        return json_encode(User::all(),true);
    }

    public function user(User $user){

        return $user;

    }
}
