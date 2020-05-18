<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Career;
use App\Header;
use App\Portofolio;
use App\Service;

class PageController extends Controller
{
    public function index()
    {
        $artikels = Artikel::latest()->get();
        $headers = Header::latest()->get();
        $portofolios = Portofolio::latest()->get();
        $services = Service::latest()->get();
        


        return view('landingPage', compact('artikels','headers','portofolios','services'));
    }

    public function showCareer()
    {
        $careers = Career::latest()->get();
        return view('pages.listCareer', compact('careers')); 
    }
}
