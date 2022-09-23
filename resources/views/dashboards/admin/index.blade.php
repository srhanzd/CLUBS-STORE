@extends('layouts.admin')
@section('title') CLUBS STORE @endsection

@section('content')

<div align="center" style="background:#1CD5E8;padding:20px;">

  <h3  class="black-text" style="font-weight:bold;"><a href="{{url('admin-dash')}}">Admin Dashboard</a></h3>
<p class="white-text" style="font-weight:bold;"> </p>
@if (session('status'))
  <div class="alert alert-danger" role="alert">
      {{ session('status') }}
  </div>
  @endif


</div>



<div class="container py-2">

   <p align="center">
        <img src="{{url('assets/img/admin.gif')}}" class="img-fluid" style="width:100px;position:relative; left:-10px;" >
{{--        <img src="{{asset('assets/img/Logom.PNG')}}" class="img-fluid" style="width:70px;" >--}}
   </p>
    <div class="row mx-5 lef">
        <div class="col-xl-3 col-md-6">
        </div>
        <div class="col-xl-3 col-md-6 " style = "position:relative; left:-400px;">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body"><i class="fas fa-users"></i> Registerd Users</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="admin-all-users">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6"  style = "position:relative; left:-138px;">
            <div class="card bg-success  text-white mb-4">
                <div class="card-body"> <i class="fas fa-file"></i> Orders</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{url('admin-Orders')}}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6" style = "position:relative; left:150px;">
            <div class="card bg-danger  text-white mb-4">
                <div class="card-body"><i class="fab fa-product-hunt"></i> Products </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="{{url('admin-products')}}">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>

    </div>

</div>
<hr>
@endsection
