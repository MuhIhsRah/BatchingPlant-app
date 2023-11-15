@extends('layout.mainlayout')

@section('title', 'Material')

@section('content')
    <div class='bg-white container-sm col-8 border my-3 rounded py-3 pb-5'>
        <div class="row g-3 align-items-center">
            <div class='col-sm-10'>
                <h1>Data Material Page</h1>
            </div>
            <div class='col-auto'>
                <a class="mt-4 btn btn-info" href='/create-material'>Add</a>
            </div>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Material Name</th>
                        <th scope="col">Price/Kg</th>
                        <th scope='col'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($task as $tasks)
                        <tr>
                            <td></td>
                            <td>{{ $tasks->material_name }}</td>
                            <td>{{ $tasks->price_kg }}</td>
                            <td><a href={{ 'delete3/' . $tasks['id'] }}>Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
