@extends('layout.mainlayout')

@section('title', 'Customer')

@section('content')
    <div class='bg-white container-sm col-8 border my-3 rounded py-3 pb-5'>
        <div class='container'>
            <h1>Input Customer Page</h1>
            <form action="store" method="post">
                @csrf
                @if (session()->has('good'))
                    <div class="alert alert-success" role='alert' x-data='{show:true}' x-init='setTimeout(()=>showfalse,3000)'
                        x-show='show'>
                        <h5 class="text-sucess">{{ session('good') }}</h5>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Customer Name</label>
                    @error('customer_name')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="customer_name" class="form-control" name='customer_name'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Project Name</label>
                    @error('project_name')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="project_name" class="form-control" name='project_name'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Project Address</label>
                    @error('project_address')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="project_address" class="form-control" name='project_address'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">No Telp</label>
                    @error('telp_no')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="number" class="form-control" name='telp_no'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Volume</label>
                    @error('volume')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="number" class="form-control" name='volume'>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            <a class="mt-4 btn btn-info" href='/data-customer'>Back</a>
        </div>
    </div>
@endsection
