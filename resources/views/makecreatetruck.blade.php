@extends('layout.mainlayout')

@section('title', 'Truck')

@section('content')
    <div class='bg-white container-sm col-8 border my-3 rounded py-3 pb-5'>
        <div class='container'>
            <h1>Input Truck Page</h1>
            <form action="store1" method="post">
                @csrf
                @if (session()->has('good1'))
                    <div class="alert alert-success" role='alert' x-data='{show:true}' x-init='setTimeout(()=>showfalse,3000)'
                        x-show='show'>
                        <h5>{{ session('good1') }}</h5>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Truck</label>
                    @error('no_truck')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="number" class="form-control" name='no_truck'>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a class="mt-4 btn btn-info" href='/data-truck'>Back</a>
        </div>

    @endsection
