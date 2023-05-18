<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use Illuminate\Database\QueryException;

class CategoryController extends AuthController
{
    public function list(Request $request)
    {
        $categories = Category::paginate($request->per_page ?: 10);
        return view('category.list',[
            'categories'=>$categories
           ]);
    }

    public function index(){
        $categories=Category::where('status',1)->get();
            return view('category.index',[
                'categories'=>$categories
            ]);
    }

    public function create(CategoryRequest $request)
    {
        $category = new Category();
        $category->title = $request['title'];
        $category->status = ($request['status'] != null)?1:0;
        try {
            $category->save();
            return redirect()->route('categoryList');
        }catch (QueryException $e){
            return response()->json(['error'=>['message'=>$e->getMessage(),'code'=>4551515]],400);
        }
    }

    public function updateP($id)
    {
        $category=Category::findOrFail($id);
        return view('category.update',[
            'category'=>$category
           ]);
    }

    public function update(CategoryRequest $request)
    {
        $category = Category::findOrFail($request['id']);
       $category->title = $request['title'];
        $category->status = ($request['status'] != null)?1:0;
        try {
            $category->save();
            return redirect()->route('categoryList');
        }catch (QueryException $e){
            return response()->json(['error'=>['message'=>$e->getMessage(),'code'=>1]],400);
        }
    }
    
    public function delete($id)
    {
        $category = Category::findOrFail($id);
        try {
            $category->delete();
            return redirect()->back();
        }catch (QueryException $e){
            return response()->json(['error'=>['message'=>$e->getMessage()]],400);
        }
    }
}
