@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="color:#262932;text-transform: uppercase;">{{Auth::user()->name}}</h4>
                        </div>
                        

                        @if(Auth::user()->role == 'Admin')

                           
                              <div class="col-md-6">
                                <a class="btn btn-primary" href="{{ route('customer.edit', ['id' => Auth::user()->customer_id]) }}">Edit Profile</a>
                                
                                @if($pay_button_status == 'open')
                                <form name="" action="{{url('/payment_request')}}" method="POST">
                                @csrf
                                  <input type="hidden" name="customer_id" id="customer_id" value="{{Auth::user()->customer_id}}">
                                  <input type="hidden" name="planamount" id="planamount" value="{{$planamount}}">
                                  <input type="hidden" name="customername" id="customername" value="{{Auth::user()->name}}">
                                  <input type="hidden" name="customeremail" id="customeremail" value="{{Auth::user()->email}}">
                                  <input type="hidden" name="customerphoneno" id="customerphoneno" value="{{$phoneno}}">

                                  

                                  <button type="submit" class="btn btn-success">Pay</button>
                                </form>

                                @endif
                                
                              </div>
                            
                        @endif

                        
                    </div>
                </div>
            </div>


            @if(Auth::user()->role == 'Admin')
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">

                      <div class="row g-sm-4 g-3">
                        <div class="col-xl-3 col-md-6">
                          <div class="prooduct-details-box">                                 
                            <div class="media">
                              <div class="media-body ms-3">
                                <div class="avaiabilty">
                                  <div class=""><span>PLAN  </span> <button class="btn " style="text-transform: uppercase;background: #d71e4a;color: white;">{{$plan}}</button></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                          <div class="prooduct-details-box"> 
                            <div class="media">
                              <div class="media-body ms-3">
                                <div class="avaiabilty">
                                  <div class=""><span>PENDING  </span> <button class="btn" style="text-transform: uppercase;background: #d71e4a;color: white;">{{$total_month}}</button></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                          <div class="prooduct-details-box"> 
                            <div class="media">
                              <div class="media-body ms-3">
                                <div class="avaiabilty">
                                  <div class=""><span>STATUS  </span> <button class="btn" style="text-transform: uppercase;background: #d71e4a;color: white;">{{$status}}</button></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                          <div class="prooduct-details-box"> 
                            <div class="media">
                              <div class="media-body ms-3">
                                <div class="avaiabilty">
                                  <div class=""><span>AMOUNT  </span> <button class="btn " style="text-transform: uppercase;background: #d71e4a;color: white;">{{$planamount}}.00</button></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                        <br/><br/><br/>
                      <div class="row g-sm-4 g-3">
                          <div class="table-responsive">
                              <table class="table table-center table-hover datatable border table-striped">
                                  <thead class="thead-light">
                                      <tr>
                                          <th>Installment</th>
                                          <th>Order ID</th>
                                          <th>Date</th>
                                          <th>Month</th>
                                          <th>Amount</th>
                                          <th>Status</th>
                                          <th>Receipt</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  @foreach ($Orderdata as $keydata => $Orderdatas)
                                    @if($Orderdatas->status == 'Paid')
                                      <tr>
                                          <td>{{$Orderdatas->installment }}</td>
                                          <td>{{$Orderdatas->razorpay_order_id }}</td>
                                          <td>{{date('d-m-Y', strtotime($Orderdatas->date))}}</td>
                                          <td>{{$Orderdatas->month}}</td>
                                          <td>{{$Orderdatas->amount}}</td>
                                          <td><a class="btn btn-primary btn-xs" href="#">{{$Orderdatas->status}}</a></td>
                                          <td><a href="{{ route('customer.recept_print', ['id' => $Orderdatas->id]) }}"
                                                                          class="btn btn-square btn-sm" style="background: #d71e4a;color: white;" >Print</a></td>
                                      </tr>
                                      @endif
                                      @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                    
                    </div>
                </div>
            </div>
            @endif


            @if(Auth::user()->role == 'Super-Admin')

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">

                    </div>
                </div>
            </div>
            @endif


        </div>
    </div>
@endsection

