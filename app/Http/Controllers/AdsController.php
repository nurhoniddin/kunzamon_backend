<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use Illuminate\Http\Request;
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
        $data->content_uz = $request->input('content_uz');
        $data->content_cyril = $request->input('content_cyril');
        $data->content_ru = $request->input('content_ru');
        $data->content_en = $request->input('content_en');

        if($request->hasFile('image')){
            $img = request('image')->store('reclam_img','public');
            $data->image = $img;
        }

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

    public function edit($id){
        $ads = Ads::findorFail($id);
        return view('adver.edit',compact('ads'));
    }

    public function update(Request $request,$id){
        $ads = Ads::findorFail($id);
        $ads->youtube_link_uz = $request->input('youtube_link_uz');
        $ads->youtube_link_cyril = $request->input('youtube_link_cyril');
        $ads->youtube_link_ru = $request->input('youtube_link_ru');
        $ads->youtube_link_en = $request->input('youtube_link_en');
        $ads->home = $request->input('home');
        $ads->detail = $request->input('detail');
        $ads->category = $request->input('category');
        $ads->content_uz = $request->input('content_uz');
        $ads->content_cyril = $request->input('content_cyril');
        $ads->content_ru = $request->input('content_ru');
        $ads->content_en = $request->input('content_en');

        if($request->hasFile('image')){
            Storage::disk('public')->delete($ads->image);
            $ads->delete();
            $img = request('image')->store('reclam_img','public');
            $ads->image = $img;
        }

        if($request->hasFile('video_uz')){
            Storage::disk('public')->delete($ads->video_uz);
            $ads->delete();
            $videouz = request('video_uz')->store('ads_uz','public');
            $ads->video_uz = $videouz;
        }

        if($request->hasFile('video_cyril')){
            Storage::disk('public')->delete($ads->ads_cyril);
            $ads->delete();
            $videocyril = request('video_cyril')->store('ads_cyril','public');
            $ads->video_cyril = $videocyril;
        }

        if($request->hasFile('video_ru'))
        {
            Storage::disk('public')->delete($ads->ads_ru);
            $ads->delete();
            $videoru = request('video_ru')->store('ads_ru','public');
            $ads->video_ru = $videoru;
        }

        if($request->hasFile('video_en')){
            Storage::disk('public')->delete($ads->ads_en);
            $ads->delete();
            $videoen = request('video_en')->store('ads_en','public');
            $ads->video_en = $videoen;
        }
//        dd($data);
        $ads->save();
        return redirect()->route('ads.index')
            ->with('success','Rolik yangilandi');

    }

    public function destroy($id){
        $post= Ads::find($id);
        Storage::disk('public')->delete($post->image);
        Storage::disk('public')->delete($post->video_uz);
        Storage::disk('public')->delete($post->video_cyril);
        Storage::disk('public')->delete($post->video_ru);
        Storage::disk('public')->delete($post->video_en);
        $post->delete();
        return back()
            ->with('error','Rolik O
           \'chirildi');
    }
}
