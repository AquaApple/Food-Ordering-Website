@extends('AdminPanel.layout.master')
@section('title','Edit Category')  
@section('content')
 

<div class="card text-center">
  <div class="card-header">
    <h4>Edit {{$category->name}}</h4>
  </div>
  <div class="card-body">
   {{--  @if(Session()->has('Success'))
       
    <div class="alert alert-success">
      {{Session()->get('Success')}}
    </div>

   @endif --}}
    <form action="{{route('category.update',$category->id)}}" method="POST">
      @csrf
      <div class="form-group">
        <label for="createcategory">Category Name</label><br>
        @error('name')
               <span class="text-danger">{{$message}}</span>
        @enderror
        <input type="text" class="form-control" name="name" id="createcategory" value="{{$category->name}}">
      </div>
      <button type="submit" class="btn btn-primary">Edit</button>
    </form>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>

<!-- Modify --> 
<div class="card text-center">
  <div class="card-header customcolor">
    <h3>Categories List</h3>
  </div>
  <div class="card-body">
    @if(isset($categories) && $categories->count() > 0)
    <table class="table" id="categories">
      <thead>
        <tr>
          <th scope="col">Category's Name</th>
          <th scope="col">Created at</th>
          <th scope="col">Updated At</th>
          <th scope="col">Operations</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $category)
        <tr>
          <td>{{$category->name}}</td>
          <td>{{$category->created_at}}</td>
          <td>{{$category->updated_at}}</td>
          <td class="text-center">
          <a href="{{route('category.edit',$category->id)}}"
          class="btn btn-primary btn-sm">Edit</a>
          <!--Going to the route with the id of the category-->
          <a href="{{route('category.delete', $category->id)}}"
          class="btn btn-danger btn-sm">Delete</a>
          <a href="{{route('category.show.food',$category->id)}}"
            class="btn btn-warning btn-sm">Show Products</a>
        </td>
   </tr>
  @endforeach
 </tbody>
</table>
@else
 <h4> There's No Categories</h4>
@endif
        
       
      </tbody>
    </table>
   
  </div>
  <div class="card-footer text-muted">
  </div>
</div>
@stop
