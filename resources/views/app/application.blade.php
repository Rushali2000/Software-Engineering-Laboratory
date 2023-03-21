@extends('layouts.app')
@section('content')
    <h1>Volunteer Sign-up Form</h1>
    <form action="submit_volunteer_info.php" method="POST" enctype="multipart/form-data">
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required><br><br>
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone"><br><br>
      <label for="address">Address:</label>
      <input type="text" id="address" name="address"><br><br>
      <label for="interests">Interests:</label>
      <textarea id="interests" name="interests"></textarea><br><br>
      <label for="resume">Resume:</label>
      <input type="file" id="resume" name="resume" accept=".pdf"><br><br>
      <label for="cover_letter">Cover Letter:</label>
      <input type="file" id="cover_letter" name="cover_letter" accept=".pdf"><br><br>
      <input type="submit" value="Submit">
    </form>
@endsection()
 
