@extends('layout.mainlayout')

@section('title', 'Customer')

@section('content')
    <div class='bg-white container-sm col-8 border my-3 rounded py-3 pb-5'>
        <div class="row g-3 align-items-center">
            <div class='col-sm-10'>
                <h1>Data Customer Page</h1>
            </div>
            <div class='col-auto'>
                <a class="mt-4 btn btn-info" href='/create-customer'>Add</a>
            </div>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">Customer Name</th>
                        <th scope="col">Project Name</th>
                        <th scope="col">Project Address</th>
                        <th scope="col">No Telp</th>
                        <th scope="col">Volume</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($task as $tasks)
                        <tr>
                            <td>{{ $tasks->customer_name }}</td>
                            <td>{{ $tasks->project_name }}</td>
                            <td>{{ $tasks->project_address }}</td>
                            <td>{{ $tasks->telp_no }}</td>
                            <td>{{ $tasks->volume }}</td>
                            <td><a href={{ 'deletee/' . $tasks['id'] }}>Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
