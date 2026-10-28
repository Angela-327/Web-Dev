<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function index(){
        return view('users.create');
    }

    public function welcome(){
        return view('welcome');
    }

    public function userWelcome(){
        return "Welcome User!";
    }

    public function sample(){
        return view('home');
    }

    public function fallback(){
        return redirect()->route('Home');
    }

    public function dashboard(){
        return view('users.dashboard');
    }

    public function edit($id){
        return view('users.edit', compact('id'));
    }

    public function assignment1(){
        return view('users.assignment1');
    }

    public function practice(){
        return view('users.practice');
    }
}