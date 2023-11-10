<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sesiController extends Controller
{
    function index(){
        return view('login');
    }
    function login(Request $request){
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ],[
            'email.required'=>'Email wajib diisi',
            'password.required'=>'password wajib diisi'
        ]);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($infologin)){
            if(Auth::user()->role == 'Operator'){
                return redirect('admin/operator');
            }elseif (Auth::user()->role == 'Supervisor'){
                return redirect('admin/supervisor');
            }
        }else{
            return redirect('')->withErrors('Username dan paassword tidak sesuai')->withInput();
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('');
    }
    
}
