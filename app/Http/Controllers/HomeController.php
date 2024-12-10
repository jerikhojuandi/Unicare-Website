<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function product(){
        return view('products');
    }

    public function facial(){
        return view('treatments-facial');
    }

    public function vitalInjector(){
        return view('treatment-vital-injector');
    }

    public function hairRemoval(){
        return view('treatment-hair-removal');
    }

    public function infuseBrightening(){
        return view('treatment-infuse-brightening');
    }

    public function fnbContouring(){
        return view('treatment-fnb-contouring');
    }

    public function skinBooster(){
        return view('treatment-skin-booster');
    }

    public function healthWellness(){
        return view('treatment-health-wellness');
    }

    public function career(){
        return view('career');
    }

    public function contact(){
        return view('contact');
    }

    public function home(){
        return view('home');
    }
}
