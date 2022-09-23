@extends('layout')
@section('title') CLUBS STORE @endsection

@section('content')

<div align="left" class="px-5 py-2" style="background:#1CD5E8;margin-top:5px; ">



</div>
<link rel="stylesheet" href="{{asset('assets/css/xzoom.css')}}">
<script src="{{ asset('assets/js/srcforimagezoomingeffects.min.js')}}"></script>
<script src="{{ asset('assets/js/xzoom.min.js')}}"></script>




<script>
    $(document).ready(function() {
        $("#main_image, .xzoom-gallery").xzoom({fadeIn:true;fadeOut:true;position:inside;});

    });
</script>
<style>

    .checked {
        color: orange;
    }
</style>

            <div id="product_data" class="col-md-7 animated fadeInLeft fast"style="left: 500px;height: 400px;">
                @csrf



                <p> Price For Printing on the product for each printing : <strong style="font-size:20px;font-family: 'Balsamiq Sans', cursive;">QR 10</strong></p>
                <form action="{{url('print/'.$order_number.'')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Printing name and number </label>
                                    <input type="checkbox"  name="pnn" id="pnn" tabindex="1">


                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label>Team logo printing </label>
                                    <input type="checkbox"  name="pel" id="pel" tabindex="">


                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <label class="control-label">Print Description<span
                                            class="text-danger">*</span></label>
                                    <input type="text"
                                           class="form-control @error('first_name') is-invalid @enderror"
                                           name="print" id="print" tabindex="3"
                                           value=""
                                           placeholder="{{ __('Enter Print Description') }}">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                    @enderror
                                </div>
                            </div>

                            <p>
                                Note:you should enter complete description for the print
                                and you should chose at least one type of printing .
                            </p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Print') }}
                            </button>
                        </div>
                    </div>
                </form>





            </div>

    <hr>


    @endsection
