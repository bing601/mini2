<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        return view('pages.contact');
    }
    function store(Request $request)
    {
        $name = $request->name;
        return redirect()->route('thanks', ['name' => $name]);
    }
    function thanks($name, Request $request){
        return view('pages.thankyou')->with(compact('name'));
    }
}
