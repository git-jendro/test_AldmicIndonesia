<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function refreshCaptcha()

    {

        return response()->json(['captcha'=> captcha_img()]);

    }
}
