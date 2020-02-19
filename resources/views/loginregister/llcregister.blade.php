@extends('layouts.master')
@section('content')
<div class="loginregister">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
      
      <form action="{{route('llcregister')}}" method="post">
      @csrf
        <div class="form-group">
          <input name="name" type="text" class="form-control" placeholder="Your Name">
        </div>
        <div class="form-group">
          <input name="email" type="text" class="form-control" placeholder="Your Email">
        </div>
        <div class="form-group">
          <input name="password" type="text" class="form-control" placeholder="Your Password">
        </div>
        <button type="submit" class="form-control">Register</button>
        <form>
      </div>
    </div>
  </div>
</div>
@endsection