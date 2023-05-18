<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use App\Models\Category;
use Illuminate\Database\QueryException;

class AuthController extends Controller
{
    private function auth($email,$password){
        $credentials =[
            'email'=>$email,
            'password'=>$password
        ];
        if(Auth::attempt($credentials)){
            return redirect()->route('welcome');
        }else{
            return redirect()->back();
        }
    }
    
    public function login(LoginRequest $request) {
        return $this->auth($request->email,$request->password);
    }

    public function register(RegisterRequest $request){
        $this->createFunc($request); 
        return $this->auth($request->email,$request->password);
    }

    public function createFunc(Request $request){
        $user= new User();
        $user->name=$request['name'];
        $user->role_id = $request['role_id'];
        $user->email=$request['email'];
        $user->phone=$request['phone'];
        $user->password=bcrypt($request['password']);
        try {
            $user->save();
        }catch (QueryException $e){
            return response()->json(['error'=>['message'=>$e->getMessage(),'code'=>4551515]],400);
        }
    }

    public function logout(){
        Auth::logout();
        return view('login.login');
    }
}
