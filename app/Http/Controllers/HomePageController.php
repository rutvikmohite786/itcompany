<?php

namespace App\Http\Controllers;
use App\Models\AboutInfo;
use App\Models\CarsolPage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index(){
         $user= AboutInfo::first();
         $carsol= CarsolPage::all();
         return view('pages.home', compact('user','carsol'));
    }
}
