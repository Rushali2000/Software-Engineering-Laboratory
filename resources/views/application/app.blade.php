@extends('layouts.app')
@section('content')
@foreach($application as $var)
{{$var->name,
  $var->application,
  $var->interest,
  
}}
@endforeach
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-dark">
      <th scope="row">Dark</th>
      <td>{{$var->name}}</td>
    </tr>
  </tbody>
</table>
@endsection()
 
