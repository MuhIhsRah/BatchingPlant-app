<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class sesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'password wajib diisi'
        ]);
        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($infologin)) {
            if (Auth::user()->role == 'Operator') {
                return redirect('admin/operator');
            } elseif (Auth::user()->role == 'Supervisor') {
                return redirect('admin/supervisor');
            }
        } else {
            return redirect('')->withErrors('Username dan paassword tidak sesuai')->withInput();
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('');
    }

    public function index4()
    {
        $task = User::all();
        return view('usersettings', compact('task'));
    }
    public function create4()
    {
        return view('makecreateuser');
    }
    public function store4(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
        ]);
        return back()->with('good4', 'Submit successfully');
    }
    public function delete4($id)
    {
        $task = User::find($id);
        $task->delete($id);
        return redirect('user-settings');
    }

    public function index5()
    {
        echo "<h1>" . Auth::user()->name . '</h1>';
    }
}
