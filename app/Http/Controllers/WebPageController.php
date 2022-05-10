<?php

namespace App\Http\Controllers;
use App\Models\AboutInfo;
use App\Models\ServiceInfo;
use App\Models\Service;
use App\Models\Contact;
use App\Models\Pricing;
use Illuminate\Http\Request;

class WebPageController extends Controller
{
    public function about(){
        $user = AboutInfo::first();
        return view('pages.aboutpage', compact('user'));
    }
    public function service()
    {
        $service = Service::all();
        $serviceInfo = ServiceInfo::first();
        return view('pages.servicepage', compact('serviceInfo', 'service'));
    }
    public function pricing()
    {
        $user = AboutInfo::first();
        $pricing = Pricing::all();
        return view('pages.pricingpage', compact('user','pricing'));
    }
    public function contact()
    {
        $user = AboutInfo::first();
        return view('pages.contactpage', compact('user'));
    }
    public function contactStore(Request $request)
    {
        Contact::create(['name' => $request->name,'email'=>$request->email, 'subject'=>$request->subject,'message'=>$request->message]);
    }
    public function webservice(){
        $webservice = Service::with(['subservice'])->where('title', 'Web Design')->first();
        return view('pages.webservice', compact('webservice'));
    }
    public function development(){
        $development = Service::with(['subservice'])->where('title', 'Development')->first();
        return view('pages.devservice', compact('development'));
    }
    public function allservice(){
        
    }
}
