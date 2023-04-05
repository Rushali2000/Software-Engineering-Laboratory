@extends('layouts.app')
@section('content')
<!-- @foreach($profile as $var)
{{$var->name,
  $var->email,
  $var->phone_no,
  $var->description,
  $var->skills,
  $var->endorsed,
  $var->prior_experience
}}
@endforeach -->
@if(Session::get('success'))
<div class="alert alert-success">
  {{Session::get('success')}}

</div>
@endif
@if(Session::get('fail'))
<div class="alert alert-danger">
  {{Session::get('fail')}}

</div>
@endif

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

@csrf
<fieldset>

  <img src="/images/img_avatar.png" style=" height:150px;width:150px;border-radius:50%;" alt="Avatar">
  <hr>

  <div class="align-right"> <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa-solid fa-pen-to-square"></i></button></div>

  <div class="modal" id="myModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
        <form method="POST" action="add1">
          @csrf
          <div class="modal-body">

            <div class="form-group">
              <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Name</label>
              <input type="text" class="form-control form-control-sm" type="text" placeholder=".form-control-sm" name="name" id="name">
              <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Email</label>
              <input type="text" class="form-control form-control-sm" type="text" placeholder=".form-control-sm" name="email" id="email">
              <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Description</label>
              <input type="text" class="form-control form-control-sm" type="text" placeholder=".form-control-sm" name="description" id="description">
              <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Phone Number</label>
              <input type="text" class="form-control form-control-sm" type="text" placeholder=".form-control-sm" name="phone_no" id="phone_no">
              <label for="exampleTextarea" class="form-label mt-4">Skills</label>
              <textarea type="text" class="form-control" name="skills" id="skills" rows="3" spellcheck="false"></textarea>
              <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Endorsed</label>
              <input type="number" class="form-control form-control-sm" type="text" placeholder=".form-control-sm" name="endorsed" id="endorsed">
              <label for="exampleTextarea" class="form-label mt-4">Prior Experience</label>
              <textarea type="text" class="form-control" name="prior_experience" id="prior_experience" rows="3" spellcheck="false"></textarea>
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
  @foreach($profile as $var)
  <h3>Description</h3>
  <p><em>{{$var->description}}</em>.</p>
  @endforeach
  <hr>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value=<?php echo $var->name ?>>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value=<?php echo $var->email ?>>
    </div>
  </div>
  <div class="form-group row">
    <label for="staticEmail" class="col-sm-2 col-form-label">Phone Number</label>
    <div class="col-sm-10">
      <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value=<?php echo $var->phone_no ?>>
    </div>
  </div>
  <legend>Skills</legend>
  <!-- <div class="align-right"> <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#myModal1"><i class="fa-solid fa-pen-to-square"></i></button></div>
  <div class="modal" id="myModal1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
         <form method="POST" action="add">
          @csrf -->
  <!-- <div class="modal-body">

          <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-4">Example textarea</label>
            <textarea type="text" class="form-control" name="skills" id="skills" rows="3" spellcheck="false"></textarea>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-primary" id="submit" name="submit">Save changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div> -->
  <!-- </form> -->
  <!-- 
      </div>

    </div>

  </div> -->
  @foreach($profile as $var)

  <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      {{$var->skills}} <div class="align-right"> <button type="button" id="countButton" onclick="" class="btn btn-outline-secondary" ><i class="fa-solid fa-star"></i></button></div></i>
      <span class="badge bg-primary rounded-pill" id="count" > {{$var->endorsed}}</span>
    </li>

  </ul>
  @endforeach
  


  <legend>Prior Experiences</legend>
  <!-- <div class="align-right"> <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#myModal2"><i class="fa-solid fa-pen-to-square"></i></button></div>
  <div class="modal" id="myModal2">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true"></span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-4">Example textarea</label>
            <textarea class="form-control" id="exampleTextarea" rows="3" spellcheck="false"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Save changes</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> -->
  @foreach($profile as $var)

  <ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      {{$var->prior_experience}}

    </li>

  </ul>
  @endforeach


  @endsection