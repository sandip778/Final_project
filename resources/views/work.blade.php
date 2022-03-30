@extends('layouts.app')

@section('content')
<div class="container">
<table>
  <tr>
    <th>name</th>
    <th>language</th>
    <th>description</th>
    <th>budget</th>
  </tr>
  @foreach($projects as $project)
  <tr>
    <td>{{$project->name}}</td>
    <td>{{$project->language}}</td>
    <td>{{$project->description}}</td>
    <td>{{$project->budget}}</td>
  </tr>
  @endforeach
  
</table>
</div>
@endsection