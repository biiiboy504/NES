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

            $courseCount = count($courses);



            $data = ['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
            return view('nes.dashboard',compact('students','data', 'studentCount','maleCount','femaleCount','courses','data','courseCount'));
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

    function userlog(){
        if(!session('loggedUser')){
            return redirect('/login');
        }else{
            return view('nes.user_log');
        }
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
                'old_password' => 'required',
                'new_password' => 'required|confirmed',
            ]);

            $admin = Admin::find(session('loggedUser'));

        #match the old pass
            if(!Hash::check($request->old_password, $admin->password)){
                return back()->with("error", "Old Password Doesn't match!");
            }
            else {
                $admin->password = Hash::make($request->new_password);
                $admin->save();
                return back()->with("status", "Password change successfully!");
            }
        }

        function changeContact()
        {
            return view('nes.change-contact');
        }

        public function updateContacts(Request $request)
        {

            $admin = Admin::find(session('loggedUser'));

            $admin->contact = $request->new_contact;
            $admin->email = $request->new_email;

            $save = $admin->save();

            if($save){
                return back()->with('status',"Contacts updated successfully!");

            }else{
                return back()->with('error',"Unsuccessful update");
            }

            // if($admin->contact = $request->new_contact){
            //     $admin->save();
            //     return back()->with("status","Contact successfully change!");
            // }
            // else {
            //     return back()->with("status","Contacts doesn't change");
            // }
        }

        function enrollment_report()
        {
            // return view('nes.reports');

            $data = DB::table('students')
            // ->join('educ_backgrounds', 'students.id', '=', 'educ_backgrounds.students_id')
            ->select('students.*')
            ->get();

            return view('nes.enrollment_report',compact('data'));

        }

        function terminal_report()
        {
            // return view('nes.reports');

            $data = DB::table('students')
            // ->join('educ_backgrounds', 'students.id', '=', 'educ_backgrounds.students_id')
            ->select('students.*')
            ->get();

            return view('nes.terminal_report',compact('data'));

        }
<<<<<<< HEAD
        
}
=======
}
>>>>>>> 5f4263f2b96361fcd97226f5f2db66e69714685d
