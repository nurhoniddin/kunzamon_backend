<?php

namespace App\Http\Controllers;

use App\Models\Videocat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VideocatController extends Controller
{
    public function index()
    {
        $videocat = Videocat::latest()->paginate(10);
        return view('videocat.index',compact('videocat'));
    }

    public function create()
    {
        return view('videocat.create');
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $data = new Videocat();
        $data->name_uz = $request->input('name_uz');
        $data->name_cyril = $request->input('name_cyril');
        $data->name_ru = $request->input('name_ru');
        $data->name_en = $request->input('name_en');
        $data->save();

       return redirect()->route('videocat.index')
           ->with('success','Kategoriya Yaratildi');
    }

    public function show($id){
        $cat = Category::findOrFail($id);
        return view('category.show',compact('cat'));
    }

    public function edit($id)
    {
        $category= Category::findOrFail($id);

        //Categories drop down start
        $categories =Category::where(['parent_id'=>0])->get();
        $categories_dropdown = "<option value='0' selected>Kategoriyalar...</option>";
        foreach($categories as $cat){
            $categories_dropdown .= "<option value='".$cat->id."'>".$cat->name_uz."</option>";
            $sub_categories = Category::where(['parent_id'=>$cat->id])->get();
            foreach($sub_categories as $sub_cat){
                $categories_dropdown.= "<option value='".$sub_cat->id."'>&nbsp;--------&nbsp;".$sub_cat->name_uz."</option>";
                $sub_cat = Category::where(['parent_id'=>$sub_cat->id])->get();
                foreach($sub_cat as $sub_cat){
                    $categories_dropdown.= "<option value='".$sub_cat->id."'>&nbsp;-------------------&nbsp;".$sub_cat->name_uz."</option>";
                }
            }
        }
        //Categories drop down ends

        return view('category.edit',compact('category','categories_dropdown'));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name_uz' => 'required',
        ]);
        $cat = Category::findOrFail($id);
        $cat->name_uz = $request->name_uz;
        $cat->name_cril = $request->name_cril;
        $cat->name_ru = $request->name_ru;
        $cat->name_en = $request->name_en;
        $cat->parent_id = $request->parent_id;
        $cat->save();
        return redirect()->route('category.index')->with('success','Kategory O`zgartirildi');
    }

    public function destroy($id)
    {
        $category= Videocat::find($id);
        $category->delete();
        return back()->with('error','Kategory O`chirildi');
    }
}
