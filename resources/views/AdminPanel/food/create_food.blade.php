@extends('AdminPanel.layout.master')
@section('title','Create Category')  
@section('content')

<div class="card bg-light mb-3 text-center">
    <div class="card-header customcolor">
        <h3>Create New Food Item<h3>
    </div>
    <div class="card-body">
 
<form action="{{route('store.food')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control"  name="name" id="name" placeholder="Cheese.." value="{{old('name')}}">
      @error('name')
      <span class="text-danger">{{$message}}</span>
     @enderror
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="text" class="form-control" name="price" id="price" placeholder="1234..." value="{{old('price')}}">
        @error('price')
        <span class="text-danger">{{$message}}</span>
       @enderror
      </div>
      <div class="form-group">
        <label for="details">Details</label>
        <textarea class="form-control" id="details" name="details" rows="2"></textarea value="{{old('details')}}">
      </div>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Category</label>
      <select name="category" class="form-control"  id="exampleFormControlSelect2">    
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{$category->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Photo</label>
        <input type="file" name="photo" class="form-control" value="{{old('photo')}}">
        @error('photo')
        <span class="text-danger">{{$message}}</span>
       @enderror
      </div>
    <button type="submit" class="btn btn-primary">Create</button>
  </form>
 </div>
 <div class="card-footer text-muted">
</div>
 </div>
@stop