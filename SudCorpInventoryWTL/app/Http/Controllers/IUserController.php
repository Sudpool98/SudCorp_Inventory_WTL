<?php

namespace App\Http\Controllers;

use App\Models\IUser;
use Illuminate\Http\Request;

class IUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $iuser = new IUser();
        $iuser->email = request("email");
        $iuser->password = request("password");
        $iuser->fname = request("fname");
        $iuser->lname = request("lname");
        $iuser->save();
        return redirect("/login");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\IUser  $iUser
     * @return \Illuminate\Http\Response
     */
    public function show(IUser $iUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IUser  $iUser
     * @return \Illuminate\Http\Response
     */
    public function edit(IUser $iUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IUser  $iUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IUser $iUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IUser  $iUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(IUser $iUser)
    {
        //
    }
}
