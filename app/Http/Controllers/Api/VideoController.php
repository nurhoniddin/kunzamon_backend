<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index(){
        $video = Video::orderBy('id','DESC')->get();
        return response()->json(compact('video'));
    }
    public function video($id)
    {
        $details = Video::where('videocat_id',$id)->get();

        return response()->json(compact('details'));
    }

}
