@extends('layouts.master')
@section('content')
<div class="loginregister padd-60">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
      @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(session()->has('message'))
                      <div class="alert alert-{{session('type')}}">
                         {{session('message')}}
                      </div>
                    @endif
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
        <button type="submit" class="btn btn-success">Register</button>
        <form>
      </div>
    </div>
  </div>
</div>
@endsection
