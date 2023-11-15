<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controlController extends Controller
{
    public function index7()
    {
        return view('control');
    }

    public function postData(Request $request)
    {
        $selectedPort = $request->input('port');
/*
        if ($_POST['Selector'] == '1') {
            $comPort=fopen($selectedPort, "w+");
            sleep(2);
            fwrite($comPort,'n');
            echo "Light On";
        }
        elseif ($_POST['Selector'] == '2') {
            $comPort=fopen($selectedPort, "w+");
            fwrite($comPort,'f');
            echo "Light Off";
        }
*/        
        if($request->input('Selector') == '1'){
            $comPort=fopen($selectedPort, "w+");
            sleep(2);
            fwrite($comPort,'n');
            echo "light on";
        }elseif($request->input('Selector') == '2'){
            $comPort=fopen($selectedPort, "w+");
            sleep(2);
            fwrite($comPort,'f');
            echo "light off";
        }
    }
}
