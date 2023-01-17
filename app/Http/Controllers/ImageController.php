<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('/index');
    }

    public function image(Request $request)
    {
        $request->image1->storeAs('public/images','file.jpg');
        $request->image2->storeAs('public/images','file.jpg');
    }
}
