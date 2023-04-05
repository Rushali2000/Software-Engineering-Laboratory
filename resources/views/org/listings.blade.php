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
<h4 style="text-align: center;">List Opportunities</h4>
<div class="align-right"> <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa-solid fa-pen-to-square"></i></button></div>

<div class="modal" id="myModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
      </div>
      <form method="POST" action="add2">
        @csrf
        <div class="modal-body">

          <div class="form-group">
            <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Opportunity Name</label>
            <input type="text" class="form-control form-control-sm" type="text" placeholder="" name="opportunityName" id="opportunityName">
            <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Job Description</label>
            <input type="text" class="form-control form-control-sm" type="text" placeholder="" name="jobDescription" id="jobDescription">
            <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Job Location</label>
            <input type="text" class="form-control form-control-sm" type="text" placeholder="" name="jobLocation" id="jobLocation">
            <label for="exampleTextarea" class="form-label mt-4">Responsibilities</label>
            <textarea type="text" class="form-control" name="responsibilities" id="responsibilities" rows="3" spellcheck="false"></textarea>
          </div>

        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id="submit" name="submit">Save changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

@foreach($list as $var)
 <div class="card">
  <div class="card-body">
    <h4 class="card-title">Opportunity Name: {{ $var->opportunityName}}</h4>
    <h6 class="card-subtitle mb-2 text-muted">Job Description: {{ $var->jobDescription}}</h6>
    <p class="card-text">Job Location: {{ $var->jobLocation}}</p>
    <p class="card-text">Job Responsibilities: {{ $var->responsibilities}}</p>
    <a href="{{url('/registered')}}" class="card-link">View Registered Volunteers</a>
  </div>
</div>
@endforeach



@endsection