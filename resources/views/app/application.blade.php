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
    <h1 style="text-align:center">Volunteer Application</h1>
    
    <div style="display: flex; justify-content: center; align-items: center;">
    <form action="add" method="POST" enctype="multipart/form-data">
      @csrf
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      <label for="phone">Phone:</label>
      <input type="tel" id="phone_no" name="phone_no"><br><br>
      <label for="address">Address:</label>
      <input type="text" id="address" name="address"><br><br>
      <!-- <label for="interests">Interests:</label>
      <textarea  id="interests" name="interests"></textarea><br><br> -->
      <label for="resume">Resume:</label>
      <input type="file" id="resume" name="resume" accept=".pdf"><br><br>
      <label for="cover_letter">Cover Letter:</label>
      <input type="file" id="cover_letter" name="cover_letter" accept=".pdf"><br><br>
      <input type="submit" value="Submit">
    </form>
</div>
@endsection()
 
