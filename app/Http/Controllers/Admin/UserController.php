<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
    //
    public function index(){
    	$users = User::get();
    	return view('admin.user.index', compact('users'));
    }

    public function edit($id){
    	$user = User::where('id',$id)->firstOrFail();
    	return view('admin.user.edit', compact('user'));
    }

    public function update(Request $request, $id){
    	$user = User::where('id', $id)->firstOrFail();
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->phone = $request->phone;

    	if ($request->password){
    		$user->password = bcrypt($request->password);
    	}

    	$user->save();

    	return redirect()->route('user');
    }
}
