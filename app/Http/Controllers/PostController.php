<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class PostController extends Controller
{
    public function list(Request $request)
    {
        $users = User::get();
        $category = Category::where('id',$request['category_id'])->with('posts')->first();
        // dd($category);
        return view('post.list',[
            'category'=>$category,
            'users'=>$users,
           ]);
    }

    public function create(PostRequest $request)
    {
        $post = new Post();
        $post->user_id = Auth::user()->id;
        $post->category_id = $request['category_id'];
        $post->text = $request['text'];
        try {
            $post->save();
            return redirect()->back();
        }catch (QueryException $e){
            return response()->json(['error'=>['message'=>$e->getMessage(),'code'=>4551515]],400);
        }
    }

    // public function update(CategoryRequest $request)
    // {
    //     $category = Category::findOrFail($request['id']);
    //    $category->title = $request['title'];
    //     $category->status = ($request['status'] != null)?1:0;
    //     try {
    //         $category->save();
    //         return redirect()->route('categoryList');
    //     }catch (QueryException $e){
    //         return response()->json(['error'=>['message'=>$e->getMessage(),'code'=>1]],400);
    //     }
    // }
    
    public function delete($id)
    {
        $post = Post::findOrFail($id);
        try {
            $post->delete();
            return redirect()->back();
        }catch (QueryException $e){
            return response()->json(['error'=>['message'=>$e->getMessage()]],400);
        }
    }
}
