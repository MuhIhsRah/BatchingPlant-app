@extends('layout.mainlayout')

@section('title','Truck')

@section('content')
<div class='container'>
    <div>
        <h1>Data Truck Page</h1>    
    </div>
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col-1">Nomor Truck </th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>  
        @foreach($task as $tasks)
          <tr>
            <td></td>
            <td>  {{$tasks->no_truck}}</td>
            <td><a href={{'delete1/'.$tasks['id']}}>Delete</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <div class='container'>
        <div class='container'>
          <a class="mt-4 btn btn-info" href='/create-truck'>Add</a>
    </div>
    </div>
    </div>
@endsection