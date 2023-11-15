@extends('layout.mainlayout')

@section('title', 'Mix Design')

@section('content')
    <div class='bg-white container-sm col-8 border my-3 rounded py-3 pb-5'>
        <div class='container'>
            <h1>Input Mix Design Page</h1>
            <form action="store6" method="post">
                @csrf
                @if (session()->has('good6'))
                    <div class="alert alert-success" role='alert' x-data='{show:true}' x-init='setTimeout(()=>showfalse,3000)'
                        x-show='show'>
                        <h5 class="text-sucess">{{ session('good6') }}</h5>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Mix Design</label>
                    @error('mixdesign')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="customer_name" class="form-control" name='mixdesign'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Slump</label>
                    @error('slump')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="project_name" class="form-control" name='slump'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bin 1</label>
                    @error('bin1')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="project_address" class="form-control" name='bin1'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bin 2</label>
                    @error('bin2')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="number" class="form-control" name='bin2'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bin 3</label>
                    @error('bin3')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="number" class="form-control" name='bin3'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bin 4</label>
                    @error('bin4')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="number" class="form-control" name='bin4'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Silo Cement</label>
                    @error('silocement')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="number" class="form-control" name='silocement'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Silo Flyash</label>
                    @error('siloflyash')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="number" class="form-control" name='siloflyash'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Tank Water</label>
                    @error('tankwater')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="number" class="form-control" name='tankwater'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Additive</label>
                    @error('additive')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="number" class="form-control" name='additive'>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            <a class="mt-4 btn btn-info" href='/mix-design'>Back</a>
        </div>
    </div>
@endsection
