<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Page;
use Illuminate\Http\Request;

class FrontendMainController extends Controller

{
    public function index()
    {   $articles = Article::all();
        // $category_id = request('category');
        // dd($category);
        // if($category_id)
        // {
        //  $articles = Article:: where('category_id', '=', $category_id)->get();
        // }
        // else
        // {
        //     $articles = Article:: get();
        // }

        return view('frontend.index',[
            'articles'=>$articles
        ]);

    }

    public function show($id)
    {
        $article = Article:: find($id);
        return view('frontend.show',[
            'article'=>$article
        ]);
    }

     public function index1()
    {   $contacts = Contact::all();


        return view('frontend.contacts.index',[
            'contacts'=>$contacts
        ]);

    }
        public function show1($id)
    {
        $contacts = Contact:: find($id);
        return view('frontend.contacts.show',[
            'contacts'=>$contacts
        ]);
    }
    public function index2()
    {   $about = Page::all();

        return view('frontend.about.index',[
            'about'=>$about
        ]);
    }
        public function show2($id=4)
    {   $about = Page::findOrFail($id=4);
           if (! $about) {
            abort(404);
        }
        return view('frontend.about.show',[
            'about'=>$about
        ]);
    }
}
