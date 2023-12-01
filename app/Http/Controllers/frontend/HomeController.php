<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
      return view('frontend.home') ; 
    }

    public function dental(){
        return view('frontend.dental') ; 
      }

    public function eye(){
     return view('frontend.eyesurgery') ; 
    }

    public function hair(){
     return view('frontend.hairtransplant') ; 
    }

    public function knee(){
        return view('frontend.knee-replacement-surgery') ; 
    }

    public function orthopaetic(){
      return view('frontend.orthopaedic') ; 
    }

    public function shoulder(){
        return view('frontend.shoulder');
    }
}
