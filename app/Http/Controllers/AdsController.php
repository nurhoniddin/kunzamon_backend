<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index(){
        $ad = Ads::latest()->paginate(10);
        return view('adver.index',compact('ad'));
    }

    public function create(){
        return view('adver.create');
    }
}
