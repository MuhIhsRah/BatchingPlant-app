<?php

namespace App\Http\Controllers;

use App\Models\Matset;
use Illuminate\Http\Request;

class matsetController extends Controller
{
    public function index5()
    {
        $task = Matset::all();
        return view('materialsettings', compact('task'));
    }
    public function create5()
    {
        return view('makecreatematset');
    }
    public function store5(Request $request)
    {
        $this->validate($request, [
            'prelimitbin1' => 'required',
            'prelimitbin2' => 'required',
            'prelimitbin3' => 'required',
            'prelimitbin4' => 'required',
            'prelimitcement' => 'required',
            'prelimitflyash' => 'required',
            'prelimitwater' => 'required',
            'prelimitadditive' => 'required',
            'joggingbin1' => 'required',
            'joggingbin2' => 'required',
            'joggingbin3' => 'required',
            'joggingbin4' => 'required',
            'remainmaterial' => 'required',
            'remaincement' => 'required',
            'remainwater' => 'required',
            'remainadditive' => 'required',
            'dischargewater' => 'required',
            'dischargecement' => 'required',
            'timerbin1' => 'required',
            'timerbin2' => 'required',
            'timerbin3' => 'required',
            'timerbin4' => 'required',
            'timermixer' => 'required',
            'conveyoron' => 'required',
            'conveyoroff' => 'required',
        ]);
        Matset::create([
            'prelimitbin1' => $request->prelimitbin1,
            'prelimitbin2' => $request->prelimitbin2,
            'prelimitbin3' => $request->prelimitbin3,
            'prelimitbin4' => $request->prelimitbin4,
            'prelimitcement' => $request->prelimitcement,
            'prelimitflyash' => $request->prelimitflyash,
            'prelimitwater' => $request->prelimitwater,
            'prelimitadditive' => $request->prelimitadditive,
            'joggingbin1' => $request->joggingbin1,
            'joggingbin2' => $request->joggingbin2,
            'joggingbin3' => $request->joggingbin3,
            'joggingbin4' => $request->joggingbin4,
            'remainmaterial' => $request->remainmaterial,
            'remaincement' => $request->remaincement,
            'remainwater' => $request->remainwater,
            'remainadditive' => $request->remainadditive,
            'dischargewater' => $request->dischargewater,
            'dischargecement' => $request->dischargecement,
            'timerbin1' => $request->timerbin1,
            'timerbin2' => $request->timerbin2,
            'timerbin3' => $request->timerbin3,
            'timerbin4' => $request->timerbin4,
            'timermixer' => $request->timermixer,
            'conveyoron' => $request->conveyoron,
            'conveyoroff' => $request->conveyoroff,
        ]);
        return back()->with('good5', 'Submit successfully');
    }
    public function delete5($id)
    {
        $task = Matset::find($id);
        $task->delete($id);
        return redirect('material-settings');
    }
}
