<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Hashing\BcryptHasher;

class UsersController extends Controller{
//create new post
    public function add(Request $request){

        $request['api_token'] = str_random(60);
        $request['password'] =  app('hash')->make($request['password']);
        $user = User::create($request->all());

        return response()->json($user);

    }

    //updates post
    public function edit(Request $request, $id){
        $user  = User::find($id);
        $user->update($request->all());
        return response()->json($user);
    }
//view post
    public function view($id){
        $post  = User::find($id);
        return response()->json($post);
    }
//delete post
    public function delete($id){
        $user  = User::find($id);
        $user->delete();
        return response()->json('Removed successfully.');
    }
//list post
    public function index(){

        $post  = User::all();

        return response()->json($post);

    }
}
?>