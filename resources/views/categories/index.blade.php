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
    <div class="col-md-6 offset-md-3">
        <div class="category-menu">
        <a class="btn btn-success" href="{{route('categories.index')}}">Category</a>
            <a class="btn btn-success" href="{{route('categories.create')}}">Category Create</a>
        </div>
        <h4 class="padd-20">Category Data</h4>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Slug</th>
      <th scope="col">Category ID</th>
    </tr>
  </thead>
  @foreach( $categories as $category )
  <tbody>
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->slug}}</td>
      <td>{{$category->categories_id}}</td>
    </tr>
  </tbody>
  @endforeach
</table>
    </div>
    </div>
  </div>
</div>

@endsection
