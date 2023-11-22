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
                        @if(Auth::user()->role == '')
                        <div class="col-md-6">
                           <a class="btn btn-primary" href="{{ route('customer.create') }}">Add Plan</a>
                        </div>
                        @endif

                        @if(Auth::user()->role == 'Admin')
                        <div class="col-md-6">
                           <a class="btn btn-primary" href="{{ route('customer.edit', ['id' => Auth::user()->customer_id]) }}">Edit Profile</a>
                           

                           <form name="" action="{{url('/payment_request')}}" method="POST">
                           @csrf
                            <input type="hidden" name="customer_id" id="customer_id" value="{{Auth::user()->customer_id}}">
                            <input type="hidden" name="planamount" id="planamount" value="{{$planamount}}">
                            <input type="hidden" name="customername" id="customername" value="{{Auth::user()->name}}">
                            <input type="hidden" name="customeremail" id="customeremail" value="{{Auth::user()->email}}">
                            <input type="hidden" name="customerphoneno" id="customerphoneno" value="{{$phoneno}}">

                            

                            <button type="submit" class="btn btn-success">Pay</button>
                           </form>


                           
                        </div>
                        @endif

                        
                    </div>
                </div>
            </div>
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
                                        <th>S.No</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($Orderdata as $keydata => $Orderdatas)
                                    <tr>
                                        <td>{{$Orderdatas->id}}</td>
                                        <td>{{$Orderdatas->date}}</td>
                                        <td>{{$Orderdatas->amount}}</td>
                                        <td><a class="btn btn-primary btn-xs" href="#">{{$Orderdatas->status}}</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

