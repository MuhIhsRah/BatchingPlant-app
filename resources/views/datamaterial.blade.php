@extends('layout.mainlayout')

@section('title','Material')

@section('content')
<div class='container'>
    <div>
        <h1>Data Material Page</h1>    
    </div>
    <table class="table table-dark table-striped">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Material Name</th>
          <th scope="col">Price/Kg</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Semen</td>
          <td>8</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Air</td>
          <td>10</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Pasir</td>
          <td>7</td>
        </tr>
      </tbody>
    </table>
    <div class='container'>
        <div class='container'>
    <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Material Name</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Price / Kg</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    </div>
    </div>
@endsection