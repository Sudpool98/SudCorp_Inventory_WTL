<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class AuthenticationController extends Controller
{
    function loginAuth(request $req)
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $data = users::where("email",$req->input('email'))->first();
        if($data == NULL || $data->password != $req->input('password'))
            return back()->with('error', 'Invalid Email or Password');
        $req->session()->put('data',$data);
        return redirect('/');
    }
    function checkNoSession()
    {
        if(!session()->has('data'))
            return redirect('/login');

        return view('index');
    }
    function checkSession()
    {
        if(session()->has('data'))
            return redirect('/');
        return view('login');
    }
    function logout()
    {
        if(session()->has('data'))
            session()->pull('data');
        return redirect('/login');
    }
}
