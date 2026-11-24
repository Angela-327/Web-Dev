<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{   
    //query builder
    public function addUser(Request $request){
        DB::table('user')->insert([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'username' => $request->input('username'),
            'city' => $request->input('city'),
            'zip' => $request->input('zip'),
        ]);

        return redirect()->route('users.list');
    }

    public function getAllUser(){
        $users = DB::table('user')->get();
        return view('users.list', compact('users'));
    }

    public function index(){
        return view('users.add');
    }
}
