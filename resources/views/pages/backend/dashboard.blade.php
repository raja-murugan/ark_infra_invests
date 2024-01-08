@extends('layout.backend.auth')

@section('content')

@if(Auth::user()->role == '')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">

                        <div class="col-md-6">
                            <h4>Add Plan</h4>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">



                    <form class="row g-3 needs-validation" autocomplete="off" method="POST" action="{{url('/payment_request')}}" enctype="multipart/form-data">
                    @csrf


                        <div class="row g-3 needs-validation custom-input">
                           <div class="col-xl-6 col-sm-6">
                              <label class="form-label" for="">Name <span class="txt-danger">*</span></label>
                              <input class="form-control digits" name="name" id="name" type="text" value="{{ auth()->user()->name }}" readonly>
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-6 col-sm-6">
                              <label class="form-label" for="">Email <span class="txt-danger">*</span></label>
                              <input class="form-control" id="email"  name="email" type="text" placeholder="Enter E-Mail" value="{{ auth()->user()->email }}" readonly>
                              <input type="hidden" name="userid" value="{{ auth()->user()->id }}" />
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>
                        <div class="row g-3 needs-validation custom-input">
                           <div class="col-xl-6 col-sm-6">
                              <label class="form-label" for="">Mobile Number <span class="txt-danger">*</span></label>
                              <input class="form-control" id="phone_number" name="phone_number" type="text" placeholder="Enter Contact Number" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-6 col-sm-6">
                              <label class="form-label" for="">Alternate Mobile Number</label>
                              <input class="form-control" id="alternate_mobileno"  name="alternate_mobileno" type="text" placeholder="Alternate contact number">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>


                        <div class="row g-3 needs-validation custom-input">
                           <div class="col-xl-6 col-sm-6">
                              <label class="form-label" for="">Address <span class="txt-danger">*</span></label>
                              <textarea name="address" id="address" class="form-control" required=""></textarea>
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-6 col-sm-6">
                            <label class="form-label" for="">Referred By</label>
                            <input class="form-control" id="referred_by"  name="referred_by" type="text" placeholder="Referred by">
                            <div class="valid-feedback">Looks good!</div>
                         </div>
                        </div>

                        <div class="row g-3 needs-validation custom-input">
                           <div class="col-xl-4 col-sm-12 order-xl-0 order-sm-1">
                              <div class="card-wrapper border rounded-3 h-100 checkbox-checked">
                              <h6 class="sub-title">Plan</h6>
                              <div class="form-check radio radio-primary ps-0">
                                 <ul class="radio-wrapper">
                                    <li>
                                       <input class="form-check-input" id="prosper" type="radio" name="plan" value="prosper" >
                                       <label class="form-check-label" for="radio-icon"><span>PROSPER</span></label>
                                    </li>
                                    <li>
                                       <input class="form-check-input" id="jackpot" type="radio" name="plan" value="jackpot" >
                                       <label class="form-check-label" for="radio-icon4"><span>JACKPOT</span></label>
                                    </li>
                                 </ul>
                              </div>
                              </div>
                           </div>
                           <div class="col-xl-5 col-sm-12 order-xl-0 order-sm-1 plandetails" style="display:none" >
                                 <div class="card-wrapper border rounded-3 h-100">


                                       <div id="prosperplan" style="display:none">
                                       <h6 class="sub-title" style="color:black">Prosper Plan - 1000/- (12 Months)</h6>
                                          <li>Gold Coin - 1.5 Grams</li>
                                          <li>Silk Saree</li>
                                          <li>Diwali Sweets</li>
                                          <li>Crackers</li>
                                       </div>
                                       <div id="jackpotplan" style="display:none">
                                       <h6 class="sub-title" style="color:black">Jackpot Plan - 1500/- (12 Months)</h6>
                                          <li>Gold Coin - 2 Grams</li>
                                          <li>Silk Saree</li>
                                          <li>Dress Coupon</li>
                                          <li>Diwali Sweets</li>
                                          <li>Crackers</li>
                                          <li>Food Coupon</li>
                                          <li>Donate Kit</li>
                                       </div>
                                 </div>
                           </div>
                        </div>




                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </form>


                    </div>
                </div>
            </div>
        </div>
    </div>



    @elseif (Auth::user()->role == 'Super-Admin')


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">

                        <div class="col-md-6">
                            <h4>Customers</h4>
                        </div>


                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">


                    <ul class="nav nav-tabs nav-tabs-solid nav-tabs-rounded">
                        <li class="nav-item"><a class="nav-link active" href="#solid-tab1" data-bs-toggle="tab">Active</a></li>
                        <li class="nav-item"><a class="nav-link" href="#solid-tab2" data-bs-toggle="tab">Inactive</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="solid-tab1">

                        <div class=" dt-ext table-responsive">
                          <div id="multilevel-btn_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <table class="display dataTable " id="multilevel-btn" role="grid" aria-describedby="multilevel-btn_info">
                              <thead>
                                <tr >
                                  <th>S.No</th>
                                  <th>Customer</th>
                                  <th>Phone Number</th>
                                  <th>Mail ID</th>
                                  <th>Address</th>
                                  <th>Managed By</th>
                                  <th>Selected Plan</th>
                                  <th>Paid Installment Count</th>
                                  <th>Action</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach ($Customer_data as $keydata => $Customer_datas)

                              <tr>
                                  <td>{{ ++$keydata }}</td>
                                  <td style="font-weight: 600;">{{ $Customer_datas['name']  }}</td>
                                  <td>{{ $Customer_datas['phone_number']  }}</td>
                                  <td>{{ $Customer_datas['email']  }}</td>
                                  <td>{{ $Customer_datas['address']  }}</td>
                                  <td>{{ $Customer_datas['referred_by']  }}</td>
                                  <td style="text-transform:uppercase">{{ $Customer_datas['plan']  }}</td>
                                  <td><span class="badge badge-danger" style="text-align:center;">{{$Customer_datas['total_installmentcount']}}</span></td>
                                  <td>
                                    <ul class="action">
                                      <li class="view"> <a href="{{ route('customer.view', ['unique_key' => $Customer_datas['unique_key']]) }}" class="btn badge badge-success">View</a></li>
                                    </ul>
                                  </td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                        </div>


                        </div>
                        <div class="tab-pane" id="solid-tab2">


                        <div class=" table-responsive">
                            <table class="display "id="basic-1">
                              <thead>
                                <tr >
                                  <th>S.No</th>
                                  <th>Customer</th>
                                  <th>E-Mail</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach ($inactiveCustomer_data as $keydata => $inactiveCustomer_datas)

                              <tr>
                                  <td>{{ ++$keydata }}</td>
                                  <td>{{ $inactiveCustomer_datas['name']  }}</td>
                                  <td>{{ $inactiveCustomer_datas['email']  }}</td>
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
    </div>


    @elseif (Auth::user()->role == 'Admin')



    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="color:#262932;text-transform: uppercase;">{{Auth::user()->name}}</h4>
                        </div>





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
                                  <div class=""><span>SELECTED PLAN    </span> <button class="btn " style="text-transform: uppercase;background: #d71e4a;color: white;">{{$plan}}</button></div>
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

                        <br/>
                      <div class="row g-sm-4 g-3">


                      <div class=" dt-ext table-responsive">
                          <div id="multilevel-btn_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <table class="display dataTable " id="export-button" role="grid" aria-describedby="export-button_info">
                                  <thead class="thead-light">
                                      <tr>
                                        <th>Installment No</th>
                                        <th>Month For</th>
                                        <th>Order ID</th>
                                        <th>Payment Date</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                  @foreach ($Orderdata as $keydata => $Orderdatas)
                                    @if($Orderdatas->status == 'Paid')
                                      <tr>
                                          <td>{{$Orderdatas->installment }}</td>
                                          <td>{{$Orderdatas->month}}</td>
                                          <td>{{$Orderdatas->razorpay_order_id }}</td>
                                          <td>{{date('d-m-Y', strtotime($Orderdatas->date))}}</td>
                                          <td>{{$Orderdatas->amount}}</td>
                                          <td><span class="badge badge-primary" style="text-transform:uppercase">{{$Orderdatas->status}}</span></td>
                                          <td><a href="{{ route('customer.recept_print', ['id' => $Orderdatas->id]) }}"
                                                                          class="badge badge-success">PRINT</a></td>
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
            </div>






        </div>
    </div>




   @endif
@endsection
