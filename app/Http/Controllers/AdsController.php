<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class AdsController extends Controller
{
    public function index(){
        $ad = Ads::latest()->paginate(10);
        return view('adver.index',compact('ad'));
    }

    public function create(){
        return view('adver.create');
    }

    public function store(Request $request){
        $data = new Ads();
        $data->youtube_link_uz = $request->input('youtube_link_uz');
        $data->youtube_link_cyril = $request->input('youtube_link_cyril');
        $data->youtube_link_ru = $request->input('youtube_link_ru');
        $data->youtube_link_en = $request->input('youtube_link_en');
        $data->home = $request->input('home');
        $data->detail = $request->input('detail');
        $data->category = $request->input('category');

        if($request->hasFile('video_uz')){
            $videouz = request('video_uz')->store('ads_uz','public');
            $data->video_uz = $videouz;
        }

        if($request->hasFile('video_cyril')){
            $videocyril = request('video_cyril')->store('ads_cyril','public');
            $data->video_cyril = $videocyril;
        }

        if($request->hasFile('video_ru'))
        {
            $videoru = request('video_ru')->store('ads_ru','public');
            $data->video_ru = $videoru;
        }

        if($request->hasFile('video_en')){
            $videoen = request('video_en')->store('ads_en','public');
            $data->video_en = $videoen;
        }
//        dd($data);
        $data->save();
        return redirect()->route('ads.index')
            ->with('success','Rolik Qo\'shildi');

    }

    public function update(){

    }

    public function destroy($id){
        $ads = Ads::find($id);
//        Storage::disk('public')->delete($ads->ads_uz);
//        Storage::disk('public')->delete($ads->ads_cyril);
//        Storage::disk('public')->delete($ads->ads_ru);
//        Storage::disk('public')->delete($ads->ads_en);
        $ads->delete();

        return back()
            ->with('error','Rolik O
           \'chirildi');
    }
}
