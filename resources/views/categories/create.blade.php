@extends('layouts.master')
@section('content')
<div class="loginregister padd-60">
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
      <div class="category-menu">
            <a class="btn btn-success" href="{{route('categories.index')}}">Category</a>
            <a class="btn btn-success" href="{{route('categories.create')}}">Category Create</a>
        </div>
          <h4 class="padd-20">Category Create</h4>
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
      <form action="{{route('categories.store')}}" method="post">
      @csrf
        <div class="form-group">
          <input name="name" value="{{old('name')}}" type="text" class="form-control" placeholder="Category Name">
        </div>
        <div class="form-group">
          <input name="slug" value="{{old('slug')}}" type="text" class="form-control" placeholder="Category Slug">
        </div>
        <div class="form-group">
          <input name="categories_id" value="{{old('categories_id')}}" type="text" class="form-control" placeholder="Category Id">
        </div>
        <button type="submit" class="btn btn-success">Category Create</button>
        <form>
      </div>
    </div>
  </div>
</div>
@endsection
