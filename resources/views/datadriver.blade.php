@extends('layout.mainlayout')

@section('title','Driver')

@section('content')
<div class='container'>
  <div class="row g-3 align-items-center">
    <div class='col-sm-10'>
        <h1>Data Driver Page</h1>    
    </div>
    <div class='col-auto'>
          <a class="mt-4 btn btn-info" href='/create-driver'>Add</a>
    </div>
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Driver Name</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($task as $tasks)
            <tr>
              <td></td>
              <td>{{$tasks->driver_name}}</td>
              <td><a href={{'delete2/'.$tasks['id']}}>Delete</a></td>
            </tr>
        @endforeach
      </tbody>
    </table>
    </div>
    </div>
@endsection