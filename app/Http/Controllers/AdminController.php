<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class AdminController extends Controller
{
    //Login
    function login()
    {
        return view('login-admin');
    }

    function check_login(Request $request)
    {

        $request->validate([
            'username'=>'required',
            'password'=>'required',
            
        ]);

        $admin=Admin::where(['username'=>$request->username,'password'=>sha1($request->password)])->count();
        
        if($admin>0){
            $adminData=Admin::where(['username'=>$request->username,'password'=>sha1($request->password)])->get();
            session(['adminData'=>$adminData]);

            if($request->has('rememberme')){
                Cookie::queue('adminuser', $request->username,1440);
                Cookie::queue('adminpwd', $request->password,1440);
            }

            return redirect('admin');
        }else{
            return redirect('admin/login')->with('msg', 'Invalid username/password!!');
        }
    }


    //Logout

    function logout()
    {
        session()->forget(['adminData']);
        return redirect('admin/logout');
    }
}
