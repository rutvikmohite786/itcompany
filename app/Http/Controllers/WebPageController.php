<?php

namespace App\Http\Controllers;
use App\Models\AboutInfo;
use Illuminate\Http\Request;

class WebPageController extends Controller
{
    public function about(){
        $user = AboutInfo::first();
        return view('pages.aboutpage', compact('user'));
    }
    public function service()
    {
        $user = AboutInfo::first();
        return view('pages.servicepage', compact('user'));
    }
    public function pricing()
    {
        $user = AboutInfo::first();
        return view('pages.pricingpage', compact('user'));
    }
    public function contact()
    {
        $user = AboutInfo::first();
        return view('pages.contactpage', compact('user'));
    }
}
