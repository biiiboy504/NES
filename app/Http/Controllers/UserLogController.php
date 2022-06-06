<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserLogController extends Controller
{
    public function index()
    {
        if(!session('loggedUser')){
            return redirect('/login');
        }else{
            // select query here
            $logs = DB::table('admins')
            ->select('admins.*')
            ->get();

            return view('nes.user_log', compact('logs'));
        }
    }
}
