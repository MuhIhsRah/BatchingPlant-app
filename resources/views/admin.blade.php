@extends('layout.mainlayout')

@section('title', 'Admin')

@section('content')
    <div class="bg-white container-sm col-6 border my-3 rounded px-5 py-3 pb-5">
        <h1>Halo!!</h1>
        <div>Selamat datang di halaman admin</div>
        <div class="card mt-3">
            <ul class="list-group list-group-flush">
                <li class="nav-item">
                    <a class="nav-link" href="/control">Start Control</a>
                    <i class="bi bi-arrow-left-circle-fill"></i>
                </li>
            </ul>
        </div>
        <div><a href="/logout" class="btn btn-sm btn-secondary">Logout >></a></div>
    </div>
@endsection
