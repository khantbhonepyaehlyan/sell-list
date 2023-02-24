<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    // admin home
    public function adminHome(){
        $user = User::get();
        return view('admin',compact('user'));
    }

    public function createPage(){
        return view('userCreate');
    }

    public function create(Request $request){
        $this->validationCheck($request);
        $data = $this->requestInfo($request);
        User::create($data);
        return redirect()->route('admin#home');
    }

    public function delete($id){
        User::where('id',$id)->delete();
        return back();
    }


    private function requestInfo($request){
    return [
        'name' => $request->userName,
        'email' => $request->userEmail,
        'password' => Hash::make($request->userPassword),
        'role' => $request->userRole,
    ];
}

    private function validationCheck($request){
        validator::make($request->all(),[
            'userName' => 'required',
            'userEmail' => 'required',
            'userPassword' => 'required'
        ])->validate();
    }
}
