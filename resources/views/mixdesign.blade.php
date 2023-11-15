@extends('layout.mainlayout')

@section('title', 'Mix Design')

@section('content')
    <div class='bg-white container-sm col-16 border my-3 rounded py-3 pb-5'>
        <div class="row g-3 align-items-center">
            <div class='col-sm-10'>
                <h1>Mix Design Page</h1>
            </div>
            <div class='col-auto'>
                <a class=" btn btn-info" href='/create-mixdesign'>Add</a>
            </div>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Mix design</th>
                        <th scope="col">Slump</th>
                        <th scope="col">Bin 1</th>
                        <th scope="col">Bin 2</th>
                        <th scope="col">Bin 3</th>
                        <th scope="col">Bin 4</th>
                        <th scope="col">Silo Cement</th>
                        <th scope="col">Silo Flyash</th>
                        <th scope="col">Tank Water</th>
                        <th scope="col">Additive</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($task as $tasks)
                        <tr>
                            <td></td>
                            <td>{{ $tasks->mixdesign }}</td>
                            <td>{{ $tasks->slump }}</td>
                            <td>{{ $tasks->bin1 }}</td>
                            <td>{{ $tasks->bin2 }}</td>
                            <td>{{ $tasks->bin3 }}</td>
                            <td>{{ $tasks->bin4 }}</td>
                            <td>{{ $tasks->silocement }}</td>
                            <td>{{ $tasks->siloflyash }}</td>
                            <td>{{ $tasks->tankwater }}</td>
                            <td>{{ $tasks->additive }}</td>
                            <td><a href={{ 'delete6/' . $tasks['id'] }}>Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
