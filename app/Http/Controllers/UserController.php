<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\IdRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Database\QueryException;
use App\Http\Requests\UserUpdateRequest;

class UserController extends AuthController
{
    public function list(Request $request)
    {
        $users=User::paginate($request->per_page ?: 10);
        return view('user.list',[
            'users'=>$users
           ]);
    }
    
    public function create(RegisterRequest $request)
    {
        $this->createFunc($request);
        return redirect()->route('userList');
    }

    public function updateP($id)
    {
        $user=User::findOrFail($id);
        return view('user.update',[
            'user'=>$user
           ]);
    }

    public function update(UserUpdateRequest $request)
    {
        $user = User::findOrFail($request['id']);
        $user->name = $request['name'];
        $user->role_id = $request['role_id'];
        $user->email = $request['email'];
        $user->phone = $request['phone'];
        $user->password = bcrypt($request['password']);
        try {
            $user->save();
            return redirect()->route('userList');
        }catch (QueryException $e){
            return response()->json(['error'=>['message'=>$e->getMessage(),'code'=>1]],400);
        }
    }
    
    public function delete($id)
    {
        $user = User::findOrFail($id);
        try {
            $user->delete();
            return redirect()->back();
        }catch (QueryException $e){
            return response()->json(['error'=>['message'=>$e->getMessage()]],400);
        }
    }
}
