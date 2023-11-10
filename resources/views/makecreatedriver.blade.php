@extends('layout.mainlayout')

@section('title','Truck')

@section('content')
    <div class='container'>
        <div class='container'>
            <h1>Input Driver Page</h1>
    <form action="store2" method="post">
        @csrf
        @if(session()->has('good2'))
            <div class="alert alert-success" role='alert' x-data='{show:true}' x-init='setTimeout(()=>showfalse,3000)' x-show='show'>
                <h5>{{session('good2')}}</h5>
            </div>
        @endif
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Drivers Name</label>
            @error('driver_name')
            <h6 class="text-danger">{{$message}}</h6>
            @enderror
            <input type="text" class="form-control" name='driver_name'>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      <a class="mt-4 btn btn-info" href='/data-driver'>Back</a>
    </div>

    @endsection