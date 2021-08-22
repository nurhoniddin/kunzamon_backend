<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Models\Videocat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::paginate(10);
        return view('videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Videocat::all();
        return view('videos.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = new Video();

       $data->title_uz = $request->input('title_uz');
       $data->title_cyril = $request->input('title_cyril');
       $data->title_ru = $request->input('title_ru');
       $data->title_en = $request->input('title_en');
       $data->video_link_uz = $request->input('video_link_uz');
       $data->video_link_cyril = $request->input('video_link_cyril');
       $data->video_link_ru = $request->input('video_link_ru');
       $data->video_link_en = $request->input('video_link_en');
       $data->videocat_id = $request->input('videocat_id');

        if ($request->hasFile('image')) {
        $imagePath = request('image')->store('video_image', 'public');
        $data->image = $imagePath;
        }
       
        if ($request->hasFile('video_file_uz')) {
        $imagePath = request('video_file_uz')->store('video_file', 'public');
        $data->video_file_uz = $imagePath;
        }

        if ($request->hasFile('video_file_cyril')) {
        $imagePath = request('video_file_cyril')->store('video_file', 'public');
        $data->video_file_cyril = $imagePath;
        }

        if ($request->hasFile('video_file_ru')) {
        $imagePath = request('video_file_ru')->store('video_file', 'public');
        $data->video_file_ru = $imagePath;
        }

        if ($request->hasFile('video_file_en')) {
        $imagePath = request('video_file_en')->store('video_file', 'public');
        $data->video_file_en = $imagePath;
        }

       $data->save();

       return redirect()->route('videos.index')
           ->with('success','Video yaratildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $video = Video::findOrFail($id);
        $category = Videocat::all();

        return view('videos.edit',compact('video','category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = Video::findOrFail($id);

       $data->title_uz = $request->title_uz;
       $data->title_cyril = $request->title_cyril;
       $data->title_ru = $request->title_ru;
       $data->title_en = $request->title_en;
       $data->video_link_uz = $request->video_link_uz;
       $data->video_link_cyril = $request->video_link_cyril;
       $data->video_link_ru = $request->video_link_ru;
       $data->video_link_en = $request->video_link_en;
       $data->videocat_id = $request->videocat_id;

        if ($request->hasFile('image')) {
        Storage::disk('public')->delete($data->image);
        $data->delete();
        $imagePath = request('image')->store('video_image', 'public');
        $data->image = $imagePath;
        }
       
        if ($request->hasFile('video_file_uz')) {
        Storage::disk('public')->delete($data->video_file_uz);
        $data->delete();
        $imagePath = request('video_file_uz')->store('video_file', 'public');
        $data->video_file_uz = $imagePath;
        }

        if ($request->hasFile('video_file_cyril')) {
        Storage::disk('public')->delete($data->video_file_cyril);
        $data->delete();
        $imagePath = request('video_file_cyril')->store('video_file', 'public');
        $data->video_file_cyril = $imagePath;
        }

        if ($request->hasFile('video_file_ru')) {
        Storage::disk('public')->delete($data->video_file_ru);
        $data->delete();
        $imagePath = request('video_file_ru')->store('video_file', 'public');
        $data->video_file_ru = $imagePath;
        }

        if ($request->hasFile('video_file_en')) {
        Storage::disk('public')->delete($data->video_file_en);
        $data->delete();
        $imagePath = request('video_file_en')->store('video_file', 'public');
        $data->video_file_en = $imagePath;
        }

       $data->save();

        return redirect()->route('videos.index')
            ->with('success','Video O`zgartirildi');    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post= Video::find($id);
        Storage::disk('public')->delete($post->image);
        Storage::disk('public')->delete($post->video_file_uz);
        Storage::disk('public')->delete($post->video_file_cyril);
        Storage::disk('public')->delete($post->video_file_ru);
        Storage::disk('public')->delete($post->video_file_en);
        $post->delete();
        return back()->with('error','Yangilik O`chirildi');
    }
}
