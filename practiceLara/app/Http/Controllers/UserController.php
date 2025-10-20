<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        return "User name is Sajib (HardCoded name)";
    }

    function allUser(){
        return view('user');
    }

    function getUserName($name){
        // return "Dynamic User name through URL: $name";
        echo "Name is $name";
        return view('userName', ['userName' => $name]);
    }

    function adminLogin(){
        return view('admin.login');
    }

    function addUser(Request $request){
        echo $request->username;
        return $request;

    }

}
