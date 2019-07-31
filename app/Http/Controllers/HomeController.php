<?php

namespace App\Http\Controllers;

use App\Models\Product;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();

        return view('frontend.index');
    }

    public function equipe(){
        //$products = Product::latest()->get();
        return view('frontend.equipe');
    }

    // ==================
    public function contact(){
        return view('frontend.contact');
    }
    // =======================

}
