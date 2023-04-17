<?php

namespace App\Http\Controllers;
use App\Models\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //

    public function login(){
        return view('login.login');
    }

    public function adminaccess(Request $request){

        $admin = Admin::where('email',$request->input('email'))->first();

        if($admin){
            if($admin->password === $request->password){
                Session::put('admin', $admin);
                return redirect("/admin/dashboard");
            }else{
                return back();
            }
          
        }else {
            return back();
        }

    }

    public function adminlogout(){
        Session::forget('admin');
        return redirect("/");
    }
}
