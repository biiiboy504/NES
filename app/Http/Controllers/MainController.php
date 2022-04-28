<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{
    function login(){
       
        return view('nes.login');
    }

    function register(){
        return view('nes.register');
    }

    function dashboard(){
        if(!session('loggedUser')){
            return redirect('/login');
        }else{

            $students = DB::table('students')
            ->join('educ_backgrounds', 'students.id', '=', 'educ_backgrounds.students_id')
            ->select('students.*', 'educ_backgrounds.course')
            ->get();

            $courses = DB::table('courses')
            ->select('courses.*')
            ->get();

            $studentCount = count($students);

            $maleCount = DB::table('students')
            ->select('gender')
            ->where('gender','=','male')
            ->get()->count();

            $femaleCount = DB::table('students')
            ->select('gender')
            ->where('gender','=','female')
            ->get()->count();

            $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
            return view('nes.dashboard',compact('students','data', 'studentCount','maleCount','femaleCount','courses'));
        }
    }

    function studentlist(){
        
    }

    function courses(){
        
    }

    function session(){
        
    }

    function userlist(){
        if(!session('loggedUser')){
            return redirect('/login');
        }else{
            return view('nes.user_list');
        }
    }

    function logs(){
       
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
                $request->session()->put('name', $userInfo->name);
                return redirect('/dashboard');
            }else{
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
    function logout(){
        if(session()->has('loggedUser')){
            session()->pull('loggedUser');
            return redirect('/login');
        }
    }

function changePassword()
    {
        return view('nes.change-password');
    }

public function updatePassword(Request $request)
{
        # Validation
    $request->validate([
    'old_password' => 'required|min:6|max:100',
    'new_password' => 'required|min:6|max:100',
    'confirm_password' => 'required|same:new_password'
    ]);


        #Match The Old Password
    $current_user = auth()->user();

    if(Hash::check($request->old_password, $current_user->password)){
        $current_user->update([
            'password'=>bcrypt($request->new_password)
        ]);

        return redirect()->back()->with('success','Password successfully updated!');
    }
    else
    {
        return redirect()->back()->with('error', 'Old Password Does not matched!');
    }
    
}


        #Update the new Password
    //     User::whereId(session('LoggedUser'))->update([
    //         'password' => Hash::make($request->new_password)
    //     ]);

    //     return back()->with("status", "Password changed successfully!");
    // }
    
}
