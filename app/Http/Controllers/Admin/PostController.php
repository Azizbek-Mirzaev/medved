<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $post = Post::get();

        // dd($article);
        return view('admin.posts.index',[
            'post'=> $post
        ]);
    }
    public function create()
    {
    //     dd('1123');
         $post = Post::get();

        return view('admin.posts.create',[
            'post'=>$post
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
        $post = new Post();

        $post->title = $request->title;

        $post->short_description = $request->short_description;

        $post->body= $request->body;

        $post->image = $image_path;
        // $about->user_id = auth()->id();//Тут выборка от Автаризованных берет Айдишку


        $post->save();
        // dd($article);

        return redirect()->route('admin.posts.index');
    }

    public function show($id)
    {
        $post = Post::find($id);
        // dd($article);
        return view('admin.posts.show',[
            'post'=> $post
        ]);
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        if (! $post) {
            abort(404);
        }

        return view('admin.posts.edit', [
            'post' => $post
        ]);
    }
        public function update(Request $request, $id) {
        $request->validate([
            'title'=>'required|string|max:100',
            'short_description'=>'required|string|max:400',
            'body'=> 'required|string',
            'image'=> 'required|file|mimes:jpg,jpeg,gif,png|max:100' . (5*1024),
            // 'documents'=> 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx|max:5120'
        ]);
            $post = Post::findOrFail($id);
            //  dd($about->image);
            $post->title = $request->title;

            $post->short_description = $request->input('short_description');

            if ($request->hasFile('image'))
            {
            // Если нужно удалить старое изображение, например:
            if ($post->image && Storage::disk('public')->exists($post->image)) {

                Storage::disk('public')->delete($post->image);
            }
             // Сохраняем новое изображение

            $path = $request->file('image')->store('abouts',['disk'=>'public']);

            $post->image = $path;

            $post->body = $request->body;
            // Если вы хотите убрать "public/" из пути, чтобы сохранить только относительный путь

            // $about->image = str_replace('public/', 'storage/', $path);
            }

            $post->save();

            return redirect()->route('admin.posts.index')->with('success', 'Новость обновлена');
            }
            public function delete($id)
        {
            $post = Post::find($id);

            if (! $post) {
                abort(404);
            }
            $post->delete();

            return redirect()->back();
        }
}
