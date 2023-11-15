<?php

namespace App\Http\Controllers;

use App\Models\Material;
use Illuminate\Http\Request;

class materialController extends Controller
{
    public function index3()
    {
        $task = Material::all();
        return view('datamaterial', compact('task'));
    }
    public function create3()
    {
        return view('makecreatematerial');
    }
    public function store3(Request $request)
    {
        $this->validate($request, [
            'material_name' => 'required',
            'price_kg' => 'required',
        ]);
        Material::create([
            'material_name' => $request->material_name,
            'price_kg' => $request->price_kg,
        ]);
        return back()->with('good3', 'Submit successfully');
    }
    public function delete3($id)
    {
        $task = Material::find($id);
        $task->delete($id);
        return redirect('data-material');
    }
}
