<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() 
    {  
        $categories = Category::get(); 
        
        return view("admin.category.index",[
            'categories'=>$categories ]);
    }

    public function create() 
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {  
        $request->validate([
        'title'=>'required|string|max:100',]);
      
        
        $category = new Category();

        $category -> title = $request -> title;
             
        $category->save();
        return redirect()->back();
    }
    public function edit($id)
    {
        $category = Category::find($id);

        if (! $category) {
            abort(404);
        }

        return view('admin.category.edit', [
            'category' => $category
        ]);

    }  public function update(Request $request, $id)
    
    {
        $category = Category::find($id);

        $category->title=$request->title;
        $category->save();

        return redirect()->back();
    }

    public function delete($id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->back();
    }

    public function show($id)
    {
        $category = Category::find($id);

        if (is_null($category)) {
            abort(404);
        }

        return view('admin.category.show',[
            'category' => $category
        ]);
    }
}
