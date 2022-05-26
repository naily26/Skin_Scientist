<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('coba');
    }

    public function service()
    {
        $gejala = DB::table('gejala')->get();
        return view('select',compact('gejala'));
    }
}
