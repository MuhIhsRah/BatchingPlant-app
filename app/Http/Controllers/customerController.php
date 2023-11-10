<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class customerController extends Controller
{
    public function index(){
        $task=Customer::all();
        return view('datacustomer', compact('task'));
    }
    public function create(){
        return view('makecreatecustomer');
    }
    public function store(Request $request){
        $this->validate($request,[
            'customer_name'=>'required',
            'project_name'=>'required',
            'project_address'=>'required',
            'telp_no'=>'required',
            'volume'=>'required'
        ]);
        Customer::create([
            'customer_name'=>$request->customer_name,
            'project_name'=>$request->project_name,
            'project_address'=>$request->project_address,
            'telp_no'=>$request->telp_no,
            'volume'=>$request->volume
        ]);
        return back()->with('good','Submit successfully');
    }
    public function deletee($id){
        $task=Customer::find($id);
        $task->delete($id);
        return redirect('data-customer');
    }
}
