<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::orderBy('published_at','desc')->get();

        return view('admin.article.index',[
            'articles'=>$articles
        ]);
    }
    public function create()
    {

        $categories = Category:: get();
        return view('admin.article.create',[
            'categories'=>$categories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|max:100',
            'short_description'=>'required|string|max:400',
            'category_id'=>'required|integer|max_digits:11',
            'published_at'=>'required|date',
            'is_actual'=> 'nullable|string',
            'edition_choice'=> 'nullable|string',
            'is_carousel'=> 'nullable|string',
            'status'=> 'nullable|string',
            'body'=> 'required|string',
            'image'=> 'required|file|mimes:jpg,jpeg,gif,png|max:100' . (5*1024),
            // 'documents'=> 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx|max:5120'
        ]);
        // dd($request->all());
        $file = $request->file('image');
        // dd($file);
        $image_path = $file->store('articles',['disk'=>'public']);
        // dd($image_path);
        $article = new Article();
        $article->title = $request->title;
        $article->short_description = $request->short_description;
        $article->category_id = $request->category_id;
        $article->published_at = $request->published_at;
        $article->is_actual = $request->boolean('is_actual');
        $article->edition_choice = $request->boolean('edition_choice');
        $article->is_carousel = $request->boolean('is_carousel');
        $article->body= $request->body;


        $article->image = $image_path;
        $article->user_id = auth()->id();//Тут выборка от Автаризованных берет Айдишку


        $article->save();
        // dd($article);

        return redirect()->route('admin.article.index');
    }
    public function show($id)
    {
        $article = Article::find($id);
        // dd($article);
        return view('admin.article.show',[
            'article'=> $article
        ]);
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $categories = Category::all(); // Добавляем категории


        if (! $article) {
            abort(404);
        }

        return view('admin.article.edit', [
            'article' => $article,
            'categories' => $categories
        ]);
    }
        public function update(Request $request, $id) {
            $request->validate([
            'title'=>'required|string|max:100',
            'short_description'=>'required|string|max:400',
            'category_id'=>'required|integer|max_digits:11',
            'published_at'=>'required|date',
            'is_actual'=> 'nullable|string',
            'edition_choice'=> 'nullable|string',
            'is_carousel'=> 'nullable|string',
            'status'=> 'nullable|string',
            'body'=> 'required|string',
            'image'=> 'required|file|mimes:jpg,jpeg,gif,png|max:100' . (5*1024)
            // 'documents'=> 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx|max:5120'
            ]);

            $article = Article::findOrFail($id);
            //  dd($about->image);
            $article->title = $request->title;

            $article->short_description = $request->input('short_description');

            if ($request->hasFile('image'))
            {
            // Если нужно удалить старое изображение, например:
            if ($article->image && Storage::disk('public')->exists($article->image)) {

                Storage::disk('public')->delete($article->image);
            }
             // Сохраняем новое изображение

            $path = $request->file('image')->store('abouts',['disk'=>'public']);

            $article->image = $path;

            $article->body = $request->body; }

            // $article = Article::findOrFail($id);
            // $article->title = $request->title;
            // $article->short_description = $request->input('short_description');
            $article->save();

            return redirect()->route('admin.article.index')->with('success', 'Новость обновлена');
        }
        public function delete($id)
        {
            $article = Article::find($id);

            if (! $article) {
                abort(404);
            }
            $article->delete();

            return redirect()->back();
        }


}
