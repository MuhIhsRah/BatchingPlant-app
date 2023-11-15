<?php

namespace App\Http\Controllers;

use App\Models\Mixdesign;
use Illuminate\Http\Request;

class mixdesignController extends Controller
{
    public function index6()
    {
        $task = Mixdesign::all();
        return view('mixdesign', compact('task'));
    }
    public function create6()
    {
        return view('makecreatemixdesign');
    }
    public function store6(Request $request)
    {
        $this->validate($request, [
            'mixdesign' => 'required',
            'slump' => 'required',
            'bin1' => 'required',
            'bin2' => 'required',
            'bin3' => 'required',
            'bin4' => 'required',
            'silocement' => 'required',
            'siloflyash' => 'required',
            'tankwater' => 'required',
            'additive' => 'required',
        ]);
        Mixdesign::create([
            'mixdesign' => $request->mixdesign,
            'slump' => $request->slump,
            'bin1' => $request->bin1,
            'bin2' => $request->bin2,
            'bin3' => $request->bin3,
            'bin4' => $request->bin4,
            'silocement' => $request->silocement,
            'siloflyash' => $request->siloflyash,
            'tankwater' => $request->tankwater,
            'additive' => $request->additive,
        ]);
        return back()->with('good6', 'Submit successfully');
    }
    public function delete6($id)
    {
        $task = Mixdesign::find($id);
        $task->delete($id);
        return redirect('mix-design');
    }
}
