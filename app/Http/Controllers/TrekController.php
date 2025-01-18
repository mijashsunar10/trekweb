<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrekController extends Controller
{

    public function header()
    {
        return view('home.header3');
    }
   
    
    public function trek1()
    {
        return view('trekking.trek1');
    }

    
    public function trekinfo()
    {
        return view('trekking.treskinfo');
    }
    public function headernew()
    {
        return view('home.headenew');
    }


    public function contact()
    {
        return view('home.contact');
    }
    
    public function faq()
    {
        return view('home.faq');
    }

    public function testimonials()
    {
        return view('home.testimonials');
    }

    public function main()
    {
        return view('home.main');
    }

    public function customize()
    {
        return view('home.customize');
    }

    public function mountainpeak()
    {
        return view('home.mountainpeak');
    }

    public function blog()
    {
        return view('home.blog');
    }

    public function news()
    {
        return view('home.news');
    }
}
