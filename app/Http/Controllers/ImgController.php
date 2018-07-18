<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImgController extends Controller
{
  public function fileUpload(Request $request)
  {
    print_r($request);
    exit;
    if($request->hasFile('image')){
      $imagename = $request->image->getClientOriginalName();
      $request->image->storeAs('public', $imagename);

    }


    //$request->user()->avatar = $request->image;
    //$request->user()->save();
    //return back();
  }
}
