<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login(){
        return view('nes.login');
    }

    function register(){
        return view('nes.register');
    }

    function dashboard(){
        $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('nes.dashboard',$data);

    }

    function studentlist(){
        return view('nes.student_list');
    }

    function courses(){
        return view('nes.courses');
    }

    function session(){
        return view('nes.session');
    }

    function userlist(){
        return view('nes.user_list');
    }

    function logs(){
        return view('nes.logs');
    }


    
    function save(Request $request){
        //Validate requests
        $request->validate([
            'email'=>'required|unique:admins',
            'username'=>'required|unique:admins',
            'password'=>'required|min:5|max:12',
            'name'=>'required|min:3|max:50',
            'address'=>'required|min:5|max:50',
            'contact'=>'required|min:10|max:11',
        ]);

        //Insert Data into Database
        $admin = new Admin;
        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->name = $request->name;
        $admin->contact = $request->contact;
        $admin->address = $request->address;
        $admin->password = Hash::make($request->password);

        $save = $admin->save();

        if($save ){
            return back()->with('success','New user has been successfuly created');

        }else{
            return back()->with('fail','Something went wrong, try again later');
        }

    }
    
    function check(Request $request){
        //Validate login inputs
        $request->validate([
            'username'=>'required',
            'password'=>'required|min:5|max:12'
        ]);

        $userInfo = Admin::where('username','=',$request->username)->first();

        if(!$userInfo){
            return back()->with('fail', 'Username not found');
        }else{
            //check password
            if(Hash::check($request->password, $userInfo->password)){
                $request->session()->put('loggedUser', $userInfo->id);
                return redirect('/dashboard');
            }else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
    function logout(){
        return redirect('/login');
    }
    


    
    
}
