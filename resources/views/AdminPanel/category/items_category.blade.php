@extends('AdminPanel.layout.master')
@section('title','Category Items')  
@section('content')

<div class="card text-center">
    <div class="card-header">
      Items List
    </div>
    <div class="card-body">
        {@if(isset($food) && $food ->count() > 0) 
        <table class="table table-bordered">
         <table id="food" class="cell-border">
            <thead>
              <tr>
                <th scope="col">Photo</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Details</th>
                <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
                @foreach($food as $f)
                <tr>
                 <td>
                   @if ($f ->photo == NULL)
                    {{'Not Available'}}
                    @else
                    <img width="60" height="60" 
                    src="/images/foods/{{$f->photo}}">
                    @endif
                </td>
                  <td>{{$f->name}}</td>
                  <td>{{$f->price}}</td>
                  <td>
                    @foreach($categories as $category)
                   @if($f->category_id == $category->id)
                    {{$category->name}}                   
                   @endif
                 @endforeach
                </td>
                  <td>
                    @if ($f ->details == NULL)
                    {{' Details Not Available'}}
                    @else
                    {{$f->details}}
                    @endif
                  </td>
                  <td class="text-center">
                      <a href="{{route('edit.food', $f->id)}}" 
                        class="btn btn-primary">Edit</a>
                      <a href="{{route('food.delete', $f->id)}}" 
                         class="btn btn-danger">Delete</a>
                </tr>
                @endforeach
            </tbody>
          </table>
         @else 
         <div class="alert alert-danger">
          <h4>There Is No Food Registered To This Category.</h4>
        </div>
        @endif 
      <div class="card-footer text-muted">   
    </div>
  </div>
</div>
@stop