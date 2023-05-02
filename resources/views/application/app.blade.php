@extends('layouts.app')
@section('content')
<!-- @foreach($app as $var)
{{$var->name,
  $var->application,
  $var->interest,
  
}}
@endforeach -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="#">Profile
            <span class="visually-hidden">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Chat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Schedules</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Training and Orientation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Resources</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Application</a>
        </li>

      </ul>
      <form class="d-flex">
        <input class="form-control me-sm-2" type="search" placeholder="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<table class="table table-hover">

  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Address</th>
      <th scope="col">Resume</th>
      <th scope="col">Cover Letter</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  @foreach($app as $var)
  <tbody>
    <tr class="table-dark">
      <!-- <th scope="row">Dark</th> -->
      <td>{{$var->name}}</td>
      <td>{{$var->email}}</td>
      <td>{{$var->phone_no}}</td>
      <td>{{$var->address}}</td>
      <td>{{$var->resume}}</td>
      <td>{{$var->cover_letter}}</td>
      <td>  <button type="submit" class="btn btn-primary" id="submit" name="submit">Accept</button>
      <button type="submit" class="btn btn-primary" id="submit" name="submit">Reject</button>
    </td>
      <!-- <td>{{$var->name}}</td> -->
    </tr>
  </tbody>
  @endforeach
</table>
@endsection()
 
