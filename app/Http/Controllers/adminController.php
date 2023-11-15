<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    function index()
    {
        return view('admin');
    }
    function operator()
    {
        return view('admin');
    }
    function supervisor()
    {
        return view('admin');
    }
    function sv()
    {
        return view('user-settings');
    }
}
