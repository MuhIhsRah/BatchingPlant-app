<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;

class driverController extends Controller
{
    public function index2()
    {
        $task = Driver::all();
        return view('datadriver', compact('task'));
    }
    public function create2()
    {
        return view('makecreatedriver');
    }
    public function store2(Request $request)
    {
        $this->validate($request, [
            'driver_name' => 'required'
        ]);
        Driver::create([
            'driver_name' => $request->driver_name
        ]);
        return back()->with('good2', 'submit successfully');
    }
    public function delete2($id)
    {
        $task = Driver::find($id);
        $task->delete();
        return redirect('data-driver');
    }
}
