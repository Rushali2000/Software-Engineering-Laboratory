@extends('layouts.app')
@section('content')
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

@foreach($list as $var)
<div class="card">
  <div class="card-body">
    <h4 class="card-title">Opportunity Name: {{ $var->opportunityName}}</h4>
    <h6 class="card-subtitle mb-2 text-muted">Job Description: {{ $var->jobDescription}}</h6>
    <p class="card-text">Job Location: {{ $var->jobLocation}}</p>
    <p class="card-text">Job Responsibilities: {{$var->responsibilities}}</p>
    <a href="{{url('/view')}}" class="card-link">View</a>
  </div>
</div>
@endforeach

@endsection