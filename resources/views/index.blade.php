@extends('layouts.master')

@section('content')
<div class="home-body padd-60">
  <div class="container">
  <div class="text-center">
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
  </div>

    <div class="row">
    <div class="col-md-6 offset-md-3 padd-20">
       <a class="btn btn-success" href="{{route('categories.index')}}">Category</a>
       <a class="btn btn-success" href="{{route('categories.create')}}">Category Create</a>
       <a class="btn btn-success" href="{{route('categories.show')}}">Category Show</a>
    </div>
    </div>
  </div>
</div>

@endsection
