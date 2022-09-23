@extends('layout')
@section('title') CLUBS STORE @endsection

@section('content')
@php
$Products=App\Models\Products::where('status','=','1')->orderBy('rating', 'DESC')->get();
@endphp
<!-- Products Starts Here -->
<section id="Products" align="center">

    <h1 class="black-text" style="font-weight:bold;">PRODUCTS</h1>
    <div style=" border-bottom: 2px solid #ffe70a;width:100px;margin-left:45%;"></div>
    <div  class="row "  >
      @foreach($Products as $item)
      <div class="col-md-4 px-5">
          <img src=" {{asset('public/Uploads/Products/'.$item->image1)}}" alt="" class="img-fluid" >

            <h2 class="black-text" style="font-weight:bold;">{{$item->name}}</h2>
            <a href="Shop/{{$item->url}}" class="btn btn-primary">Shop Now</a>

      </div>
     @endforeach

    </div>

    <hr class="col-md-6">
</section>
<!-- Products Ends Here -->


@endsection
