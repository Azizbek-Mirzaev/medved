<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
    //     dd('1123');
         $about = Page::orderBy('id','desc')->get();

        return view('admin.about.index',[
            'about'=>$about
        ]);
    }
       public function create()
    {
    //     dd('1123');
         $about = Page::get();

        return view('admin.about.create',[
            'about'=>$about
        ]);
    }

        public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|max:100',
            'short_description'=>'required|string|max:400',
            'body'=> 'required|string',
            'image'=> 'required|file|mimes:jpg,jpeg,gif,png|max:100' . (5*1024),
            // 'documents'=> 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx|max:5120'
        ]);
        // dd($request->all());
        $file = $request->file('image');
        // dd($file);
        $image_path = $file->store('abouts',['disk'=>'public']);
        // dd($image_path);
        $about = new Page();

        $about->title = $request->title;

        $about->short_description = $request->short_description;

        $about->body= $request->body;

        $about->image = $image_path;
        // $about->user_id = auth()->id();//Тут выборка от Автаризованных берет Айдишку


        $about->save();
        // dd($article);

        return redirect()->route('admin.about.index');
    }

    public function show($id)
    {
        $about = Page::find($id);
        // dd($article);
        return view('admin.about.show',[
            'about'=> $about
        ]);
    }

    public function edit($id)
    {
        $about = Page::findOrFail($id);

        if (! $about) {
            abort(404);
        }

        return view('admin.about.edit', [
            'about' => $about
        ]);
    }
        public function update(Request $request, $id) {
            $about = Page::findOrFail($id);

            $about->title = $request->title;
            $about->short_description = $request->input('short_description');
            $about->save();

            return redirect()->route('admin.about.index')->with('success', 'Новость обновлена');
        }
            public function delete($id)
        {
            $about = Page::find($id);

            if (! $about) {
                abort(404);
            }
            $about->delete();

            return redirect()->back();
        }
}
