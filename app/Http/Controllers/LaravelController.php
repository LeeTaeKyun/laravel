<?php

namespace App\Http\Controllers;
use App\Laravel;
use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function index()
    {
      
      return view('laravel');
    }



    public function store(Request $request)
    {
      \Log::info($request->all());
      $la = new Laravel;
      $la->name = $request->name;
      $la->phone = $request->phone;
      $la->email = $request->email;
      $la->image = $request->image;

      $la->save();
    }
}
