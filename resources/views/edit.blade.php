@extends('layout')


@section('content')

  <div class ="col-sm-6">
  <form method = "post" action ="">
  @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control"  value = "{{$data->name}}">
  </div>
  <div class="form-group">
    <label >Email address</label>
    <input type="email" name="email" class="form-control" value = "{{$data->email}}" placeholder ="Enter email">
  </div>
  <div class="form-group">
    <label>Address</label>
    <input type="text" name="address" class="form-control"  value = "{{$data->address}}"placeholder ="Enter address">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection