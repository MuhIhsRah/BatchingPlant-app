<?php

namespace App\Http\Controllers;

use App\Models\Truck;
use Illuminate\Http\Request;

class truckController extends Controller
{
    public function index1(){
        $task=Truck::all();
        return view('datatruck', compact('task'));
    }
    public function create1(){
        return view('makecreatetruck');
    }
    public function store1(Request $request){
        $this->validate($request,[
            'no_truck'=>'required | numeric'
        ]);
        $task=[
            'no_truck'=>$request->no_truck
        ];
        Truck::create($task);
        return back()->with('good1','Submit successfully');
    }
    public function delete1($id){
        $task=Truck::find($id);
        $task->delete();
        return redirect('data-truck');
    }
}
