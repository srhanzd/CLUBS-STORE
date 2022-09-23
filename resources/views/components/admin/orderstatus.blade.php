<!-- Central Modal Medium Success -->
<div class="modal modal-large fade" id="show_Order_Status_Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
    <div  align="center" class="modal-dialog modal-notify modal-success modal-xl" role="document" >
        <!--Content-->
        <div class="modal-content">
        <!--Header-->
        <div class="modal-header">
            <p class="heading lead">Order Status for Order Number : {{session('Order_id')}} </p>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" class="white-text">&times;</span>
            </button>
        </div>

        <!--Body-->
        <div class="modal-body">
           <!-- <h3>Order No : {{session('Order_id')}} </h3>-->
            <!-- Order Status Table-->
                @if(session('Order_Cancel_Status')==1 && session('Delivery_Status')=='pending')
                      <p class=" animated rotateIn">
                        <i class="fas fa-ban fa-3x"></i>
                        </p>
                        <h3>Order Cancelled   </h3>
                @endif

                @if(session('Delivery_Status')!='pending')
                <p class=" animated rotateIn">
                <i class="fas fa-check-circle fa-3x"></i>
                </p>
                <h3>Order Completed Succesfully </h3>
                @endif
            <!--Grid row-->
                <div class="row wow fadeIn">

                    <!--Grid column-->
                    <div class="col-md-12 ">

                        <!--Card-->
                        <div class="card">

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Table  -->
                            <table class="table table-hover">
                                 <tr>
                                    <th><i class="fas fa-shipping-fast "></i> Shipping  Status</th>
                                      @if(session('Order_Cancel_Status')==1)
                                    <td class="disabled" alt="Disaled">
                                    @else
                                    <td>
                                    @endif
                                        <form action="admin-Update-Shipping-Status" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{session('Order_id')}}" name="Order_id">
                                            <select name="Shipping_Status">
                                                <option value="{{session('Shipping_Status')}}" hidden>{{session('Shipping_Status')}}</option>
                                                <option value="pending">pending</option>
                                                <option value="completed">completed</option>
                                            </select>
                                            <button type="submit">Update</button>
                                        </form>

                                    </td>
                                  </tr>
                                  <tr>
                                    <th><i class="fas fa-truck "></i> Delivery  Status:</th>
                                    @if(session('Order_Cancel_Status')==1 || session('Delivery_Status') !='pending' )
                                    <td class="disabled" alt="Disaled">
                                    @else
                                    <td>
                                    @endif
                                        <form action="admin-Update-Delivery-Status" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{session('Order_id')}}" name="Order_id">
                                            <select name="Delivery_Status">
                                                <option value="{{session('Delivery_Status')}}" hidden>{{session('Delivery_Status')}}</option>
                                                <option value="pending">pending</option>
                                                <option value="completed">completed</option>
                                            </select>
                                            <button type="submit">Update</button>
                                        </form>


                                    </td>
                                  </tr>
                                  <tr>
                                    <th><i class="fas fa-money-check "></i> Payment Status:</th>
                                    <td>

                                              <form action="admin-Update-Payment-Status" method="POST">
                                                 @csrf
                                                 <input type="hidden" value="{{session('Order_id')}}" name="Order_id">


                                            <select name="p_status">
                                                <option value="{{session('p_status')}}" hidden>{{session('p_status')}}</option>
                                              <option value="pending">pending</option>
                                              <option value="completed">completed</option>

                                            </select>
                                    <button type="submit">Update</button>
                                    </form>
                                     </td>
                                  </tr>






                                    </table>
                                    <!-- Table  -->


                        </div>

                        </div>
                        <!--/.Card-->

                    </div>
                    <!--Grid column-->



                </div>
                <!--Grid row-->

                     <p align="left" style="color:red"><br>Note:
                    <ul align="left" style="color:red">
                          @if(session('Order_Cancel_Status')==1 )
                            <li>
                                 It is not possible to update the delivery and shipping status of the cancelled orders...
                            </li>
                            <li>Click <a href="{{url('admin-Order-Re-Cancel/'.session('Order_id').'')}}" >Here</a> to Re Cancel the this Order</li>
                         @else
                                 <li>
                               It is not possible to update the delivery status for multiple times
                            </li>
                         @endif

                    </ul>
                 </p>

        </div>

            <!--Footer-->
        <div class="modal-footer justify-content-center">
            <a type="button" class="btn btn-outline-success waves-effect" data-dismiss="modal">Close</a>
        </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!-- Central Modal Medium Success-->
