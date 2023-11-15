@extends('layout.mainlayout')

@section('title', 'Customer')

@section('content')
    <div class='bg-white container-sm col-8 border my-3 rounded py-3 pb-5'>
        <div class='container'>
            <h1>Input User Page</h1>
            <form action="store4" method="post">
                @csrf
                @if (session()->has('good4'))
                    <div class="alert alert-success" role='alert' x-data='{show:true}' x-init='setTimeout(()=>showfalse,3000)'
                        x-show='show'>
                        <h5 class="text-sucess">{{ session('good4') }}</h5>
                    </div>
                @endif
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    @error('name')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="name" class="form-control" name='name'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    @error('email')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="email" class="form-control" name='email'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    @error('password')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <input type="password" class="form-control" name='password'>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Role</label>
                    @error('role')
                        <h6 class="text-danger">{{ $message }}</h6>
                    @enderror
                    <select name="role" id='' class="form-control">
                        <option value="Supervisor">Supervisor</option>
                        <option value="operator">Operator</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            <a class="mt-4 btn btn-info" href='/user-settings'>Back</a>
        </div>

    @endsection
