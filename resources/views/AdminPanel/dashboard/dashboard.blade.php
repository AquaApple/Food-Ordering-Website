@extends('AdminPanel.layout.master')
@section('title','Admin Dashboard')  
@section('content')

<!-- Dashboard -->
<div class="row">
 <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
      <div class="inner">
        <h3 style="text-align: center">0</h3>
        <p style="text-align: center">Orders</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3 style="text-align: center">{{App\Models\Category::count()}}</h3>

        <p style="text-align: center">Categories</p>
      </div>
      <div class="icon">
        <i class="ion ion-stats-bars"></i>
      </div>
      <a href="{{route('create.category')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3 style="text-align: center">{{App\Models\Food::count()}}</h3>

        <p style="text-align: center">Items</p>
      </div>
      <div class="icon">
        <i class="ion ion-person-add"></i>
      </div>
      <a href="{{route('show.food')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-danger">
      <div class="inner">
        <h3 style="text-align: center">0</h3>

        <p style="text-align: center">Unique Visitors</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
      <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
     </div>
   </div>
   </div>
</div>
   <!-- Search -->
    <h2 class="text-center display-4">Search</h2>
    <div class="row">
     <div class="col-md-8 offset-md-2">
        <div class="input-group">
        <input type="hidden" name="_token" value="{{csrf_token()}}" class="form-control">
         <input type="text" id="search" class="form-control form-control-lg" placeholder="Type your keywords here">
          <div class="input-group-append">
           <button type="button" class="btn btn-lg btn-default">
             <i class="fa fa-search"></i>
            </button>
          </div>
         </div>
         <div class="show-result">
           
        </div>
      </div>
     </div>
    </div>
     </section>
    </div>
  </div>
 </div>

@stop
<script src="{{asset('adminPanel/plugins/jquery/jquery.min.js')}}"></script>
<script>
  $(document).ready(function(){
    $('#search').keyup(function(){
      var key = $(this).val();
      if(key != ''){
         //Ajax
         $.ajax({
           url:"{{route('search.food')}}" , // Action
           method:"POST",                       // Method
           data:{
            '_token':"{{csrf_token()}}",
            'K': key

         },
         success:function(response){
           $('.show-result').show();
           $('.show-result').html(response);
         }
         });
        
      }else{
       $('.show-result').hide();
      }
    });
  });
  </script>
