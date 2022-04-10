<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IUser;
use App\Models\Items;

class AuthenticationController extends Controller
{
    function loginAuth(request $req)
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $data = IUser::where("email",$req->input('email'))->first();
        if($data == NULL || $data->password != $req->input('password'))
            return back()->with('error', 'Invalid Email or Password');
        $req->session()->put('data',$data);
        return redirect('/');
    }
    function checkNoSession()
    {
        if(!session()->has('data'))
            return redirect('/login');
        $count = Items::where("email",session('data')['email'])->count();
        $sum = Items::where("email",session('data')['email'])->sum('price');
        if($count==NULL)
            $count=0;
        if($sum==NULL)
            $sum=0;
        $data = [
            "count" => $count,
            "sum" => $sum
        ];
        return view('index',$data);
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
