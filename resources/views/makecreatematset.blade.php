@extends('layout.mainlayout')

@section('title', 'Customer')

@section('content')
    <div class='bg-white container-sm col-8 border my-3 rounded py-3 pb-5'>
        <h1>Input Material Settings Page</h1>
        <form action="store5" method="post">
            @csrf
            @if (session()->has('good5'))
                <div class="alert alert-success" role='alert' x-data='{show:true}' x-init='setTimeout(()=>showfalse,3000)'
                    x-show='show'>
                    <h5 class="text-sucess">{{ session('good5') }}</h5>
                </div>
            @endif
            <h4>Data Prelimit</h4>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prelimit Bin-1</label>
                @error('prelimitbin1')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='prelimitbin1'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prelimit Bin-2</label>
                @error('prelimitbin2')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='prelimitbin2'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prelimit Bin-3</label>
                @error('prelimitbin3')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='prelimitbin3'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prelimit Bin-4</label>
                @error('prelimitbin4')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='prelimitbin4'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prelimit Cement</label>
                @error('prelimitcement')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='prelimitcement'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prelimit Flyash</label>
                @error('prelimitflyash')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='prelimitflyash'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prelimit Water</label>
                @error('prelimitwater')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='prelimitwater'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Prelimit Additive</label>
                @error('prelimitadditive')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='prelimitadditive'>
            </div>

            <h4>Data Jogging</h4>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jogging Bin-1</label>
                @error('joggingbin1')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='joggingbin1'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Jogging Bin-2</label>
                @error('joggingbin2')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='joggingbin2'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">jogging Bin-3</label>
                @error('joggingbin3')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='joggingbin3'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">jogging Bin-4</label>
                @error('joggingbin4')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='joggingbin4'>
            </div>

            <h4>Data Remain</h4>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Remain Material</label>
                @error('remainmaterial')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='remainmaterial'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Remain Cement</label>
                @error('remaincement')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='remaincement'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Remain Water</label>
                @error('remainwater')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='remainwater'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Remain Additive</label>
                @error('remainadditive')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='remainadditive'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Discharge Water</label>
                @error('dischargewater')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='dischargewater'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Discharge Cement</label>
                @error('dischargecement')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='dischargecement'>
            </div>

            <h4>Timer Setting</h4>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Timer Bin-1</label>
                @error('timerbin1')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='timerbin1'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Timer Bin-2</label>
                @error('timerbin2')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='timerbin2'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Timer Bin-3</label>
                @error('timerbin3')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='timerbin3'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Timer Bin-4</label>
                @error('timerbin4')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='timerbin4'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Timer Mixer</label>
                @error('timermixer')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='timermixer'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Conveyor On</label>
                @error('conveyoron')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='conveyoron'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Conveyor Off</label>
                @error('conveyoroff')
                    <h6 class="text-danger">{{ $message }}</h6>
                @enderror
                <input type="number" class="form-control" name='conveyoroff'>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <a class="mt-4 btn btn-info" href='/material-settings'>Back</a>
    </div>
@endsection
