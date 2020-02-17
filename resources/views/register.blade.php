@extends('layouts.master')
@section('content')
@if ($errors->any())
  <div class="alert alert-danger">
    @if($errors->count() === 1)
    {{$errors->first()}}
    @else
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
     @endif
  </div>
@endif

@if(session()->has('message'))
<div class="alert alert-success">
  {{session('message')}}
  </div>
@endif
<div class="register">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
      <form action="{{route('register')}}" method="post">
      @csrf
        <div class="form-group">
            <input name="name" type="text" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
            <input name="username" type="text" class="form-control" placeholder="Enter username">
        </div>
        <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
            <input name="password" type="password" class="form-control" placeholder="Enter password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
     </div>
    </div>
  </div>
</div>
@endsection