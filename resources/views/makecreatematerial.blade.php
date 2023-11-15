@extends('layout.mainlayout')

@section('title', 'Material')

@section('content')
    <div class='bg-white container-sm col-8 border my-3 rounded py-3 pb-5'>
        <div class='container'>
            <h1>Input Material Page</h1>
            <form action="store3" method="post">
                @csrf
                @if (session()->has('good3'))
                    <div class="alert alert-success" role='alert' x-data='{show:true}' x-init='setTimeout(()=>showfalse,3000)'
                        x-show='show'>
                        <h5 class="text-sucess">{{ session('good3') }}</h5>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Material Name</label>
                    @error('material_name')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="text" class="form-control" name='material_name'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Price/Kg</label>
                    @error('price_kg')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="number" class="form-control" name='price_kg'>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            <a class="mt-4 btn btn-info" href='/data-material'>Back</a>
        </div>

    @endsection
