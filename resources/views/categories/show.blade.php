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
        <div class="row">
          <div class="col-md-4">
            <p><strong>ID : </strong></p>
            <p><strong>Category Name : </strong></p>
            <p><strong>Category Slug : </strong></p>
            <p><strong>Category ID : </strong></p>
          </div>
          <div class="col-md-8">
          <p>{{$categories->id}}</p>
          <p>{{$categories->name}}</p>
          <p>{{$categories->slug}}</p>
          <p>{{$categories->categories_id}}</p>
          </div>
        </div>
        <a class="btn btn-success"href="{{route('categories.edit',$categories->id)}}">Update</a>
      
    </div>
    </div>
  </div>
</div>

@endsection
