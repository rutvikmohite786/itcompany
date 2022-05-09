<?php

namespace App\Http\Controllers;
use App\Models\AboutInfo;
use App\Models\CarsolPage;
use App\Models\ServiceInfo;
use App\Models\Service;
use App\Models\Pricing;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
         $user= AboutInfo::first();
         $carsol= CarsolPage::all();
         $service = Service::all();
         $serviceInfo= ServiceInfo::first();
         $pricing = Pricing::all();
         return view('pages.home', compact('user','carsol','serviceInfo','service','pricing'));
    }
}
