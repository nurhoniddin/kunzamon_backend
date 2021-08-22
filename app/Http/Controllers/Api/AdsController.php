<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdsController extends Controller
{
    public function index(){
        $ads = DB::table('ads')->where('home', '=',1)->first();
        return response()->json($ads);
    }

    public function detail(){
        $ads = DB::table('ads')->where('detail', '=',1)->first();
        return response()->json($ads);
    }

    public function category(){
        $ads = DB::table('ads')->where('category', '=',1)->first();
        return response()->json($ads);
    }
}
