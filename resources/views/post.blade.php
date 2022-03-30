@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>

<div class="container">
  <h1 class="text-center">Please insert the details of your project</h1>
  <form method="POST" action="store"  enctype="multipart/form-data">
  @csrf
    <label for="name">Name of the project:</label><br>
    <input type="text" id="name" name="name"><br>
    <br>
   <label for="language">preferred language:</label><br>
   <input type="text" id="language" name="language"><br>
   <br>
   <label for="description">description on your project:</label><br>
   <input class="description" type="text" id="description" name="description"><br>
   <br>
   <label for="budget">Estimated budget</label><br>
   <input class="budget" type="int" id="budget" name="budget">

   <br>
   <br>
   <input type="submit" name="insert" value="insert" class="btn btn-primary">
   <//a href="/post" class="btn btn-primary">Post work</a>

  </form>
</div>
<style>

  .description{
    height:150px;
    width:25%
    
  }
</style>
@endsection
</html>