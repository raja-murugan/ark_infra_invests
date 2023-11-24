@extends('layout.backend.auth')

@section('content')

<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">

                        <div class="col-md-6">
                            <h5 style="text-transform:uppercase;color:green">Customer -   {{$Viewdata->name}}</h5>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-0 me-0"></div>
                            <a class="btn btn-primary" href="{{ route('home') }}">Back</a>
                        </div>
                       
                    </div>
                </div>
            </div>

               <div class="col-sm-12">
                  <div class="card">
                     <div class="card-body">



                     <div class=" dt-ext table-responsive">
                            <table class="display dataTable " id="basic-6">
                              <thead>
                                <tr >
                                  <th>Installment</th>
                                  <th>Date of Payment</th>
                                  <th>Order ID</th>
                                  <th>Payment Mode</th>
                                  <th>Month</th>
                                  <th>Amount</th>
                                  <th>Print</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach ($order_list as $keydata => $order_lists)
                              
                              <tr>
                                  <td>{{ $order_lists->installment }}</td>
                                  <td>{{ date('d-m-Y', strtotime($order_lists->date))  }}</td>
                                  <td>{{ $order_lists->razorpay_order_id  }}</td>
                                  <td>Online</td>
                                  <td>{{ $order_lists->month }}</td>
                                  <td>{{ $order_lists->amount }}</td>
                                  <td><a href="{{ route('customer.recept_print', ['id' => $order_lists->id]) }}"
                                                                          class="badge badge-success">PRINT</a></td>
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

@endsection