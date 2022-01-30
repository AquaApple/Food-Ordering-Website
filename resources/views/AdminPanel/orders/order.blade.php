@extends('AdminPanel.layout.master')
@section('title','Food Items')  
@section('content')

<div class="card text-center">
    <div class="card-header">
      <h3>Orders List</h3>
    </div>
   <div class="card-body">
      @if(isset($orders) && $order ->count() > 0)       
    
         <table id="food" class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">Order ID</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Order Details</th>
                <th scope="col">Ordered At</th>
                <th scope="col">Operations</th>
              </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                  <td>{{$order->id}}</td>
                  <td>{{$order->name}}</td>
                  <td>{{$order->details}}</td>
                  <td>{{$order->Created_at}}</td>       
                   <td class="text-center">
                      <a href="#" 
                        class="btn btn-primary">Edit</a>
                      <a href="#" 
                         class="btn btn-danger">Delete</a>
                   </td>
                </tr>
                @endforeach
            </tbody>
          </table>         
         @else
         <div class="alert alert-danger">
          <h4>There is No Orders.</h4>
        </div>      
        @endif
        
    </div>
    <div class="card-footer text-muted">   
    </div>      
</div>
@stop