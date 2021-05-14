@extends('layout')


@section('content')

<h1> register page is here </h1>

<form method="post" action="register">   
 @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Entre nom">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" name="email" class="form-control"  placeholder ="Enter email">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder ="mot de passe">
  </div>
  <div class="form-group">
    <label>Contact</label>
    <input type="text" name="contact" class="form-control" placeholder ="contact">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Registre</button>
</form>



@endsection