@extends('layout.mainlayout')

@section('title', 'User')

@section('content')
    <div class='bg-white container-sm col-8 border my-3 rounded py-3 pb-5'>
        <div class="row g-3 align-items-center">
            <div class='col-sm-10'>
                <h1>User Settings Page</h1>
            </div>
            <div class='col-auto'>
                <a class=" btn btn-info" href='/create-user'>Add</a>
            </div>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Email</th>
                        <th scope="col">UserLevel</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($task as $tasks)
                        <tr>
                            <td></td>
                            <td>{{ $tasks->email }}</td>
                            <td>{{ $tasks->role }}</td>
                            <td><a href={{ 'delete4/' . $tasks['id'] }}>Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
