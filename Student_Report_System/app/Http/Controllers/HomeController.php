<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class HomeController extends Controller
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
    public function index()
    {
        $reports = Report::orderBy('created_at','desc')->take(5)->get();
        return view('master.index', compact('reports'));
    }
}
