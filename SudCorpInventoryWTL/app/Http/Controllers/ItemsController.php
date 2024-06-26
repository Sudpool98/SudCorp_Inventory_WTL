<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!session()->has('data'))
            return redirect('/login');
        $items = Items::where("email",session('data')['email'])->get();
        return view('inventory',["items"=>$items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!session()->has('data'))
            return redirect('/login');
        return view('itemviews.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'iname' => 'required',
            'price' => 'required'
        ]);
        
        $item = new Items();
        $item->email = session('data')['email'];
        $item->iname = request("iname");
        $item->price = (int)request("price");
        $item->save();
        return redirect("/inventory");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Items $items)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!session()->has('data'))
            return redirect('/login');
        $item = Items::find($id);
        return view("itemviews.edit",["item"=>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Items  $items
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'iname' => 'required',
            'price' => 'required'
        ]);

        $item = Items::find($id);
        $item->iname = request("iname");
        $item->price = (int)request("price");
        $item->save();
        return redirect("/inventory");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Items  $items
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Items::find($id);
        $item->delete();
        return redirect("/inventory");
    }
}
