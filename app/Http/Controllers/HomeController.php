<?php

namespace App\Http\Controllers;
use App\PublicContact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $public_contacts= PublicContact::all();
        return view('dashboard.home', ['public_contacts'=>$public_contacts]);
    }
}
