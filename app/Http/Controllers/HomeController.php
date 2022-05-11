<?php

namespace App\Http\Controllers;

use App\Models\AboutInfo;
use App\Models\CarsolPage;
use App\Models\ServiceInfo;
use App\Models\Service;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Pricing;
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $about = AboutInfo::first();
        $carsol = CarsolPage::all();
        $contact = Contact::all();
        $service = Service::all();
        $serviceInfo = ServiceInfo::first();
        $pricing = Pricing::all();
        $blog = Blog::all();
        return view('home', compact('about','contact','carsol', 'serviceInfo', 'service', 'pricing', 'blog'));
    }
}
