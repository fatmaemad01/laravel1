<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FormsController extends Controller

{
    public function form1()
    {
      return view('formes.form1');
    }
    public function form1_data(Request $request)
    {
        $request->validate([
            'number'=>'required|min:8|max:8',
            'password'=>'required|min:8|max:8'
        ]);

        $credentials=$request->only('number','password');
        if(Auth::attempt($credentials)){
            return view('formes.welcom1');
        }
           // dd($request->all());
           return view('formes.welcom1');


    }
    public function dashboard()
    {
        if(auth::check()){
            return view('formes.welcom1');
        }
        # code...
    }
    public function welcom1()
    {
      return view('formes.welcom1');
    }


}
