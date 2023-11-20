@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Booking - Payment</h4>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-0 me-0"></div>
                            <a class="btn btn-primary" href="{{ route('booking.index') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">



                    <form class="row g-3 needs-validation" autocomplete="off" method="POST" action="{{ route('booking.paymentstore') }}" enctype="multipart/form-data">
                    @csrf



                        <div class="row">
                              <h6>Customer Details</h6><br/><br/>

                              <div class="col-xl-12 col-sm-12" style="margin-top: 20px;">
                                 <div class="card crypto-main-card">
                                    <div class="card-body">
                                       <div class="deposit-wrap">
                                       <div>
                                          <h5>{{$BookingData->customername}}</h5>
                                          <p>{{$BookingData->address}}, {{$BookingData->street}}, {{$BookingData->area}}, {{$BookingData->city}} - {{$BookingData->pincode}}</p>
                                          <p>Phone Number : <span>{{$BookingData->mobileno}}</span></p>
                                       </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>


                        </div>


                        <div class="row" style="margin-bottom:40px;">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Date<span class="txt-danger">*</span></label>
                              <input class="form-control digits" name="date" id="date" type="date" required="" value="{{$today}}">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>


                        <div class="row" style="margin-bottom:40px;">

                           <div class="table-responsive col-lg-12 col-sm-12 col-12">
                              <table class="table">
                                 <thead>
                                    <tr style="background: #f8f9fa;">
                                        <th style="font-size:15px;">Block</th>
                                        <th style="font-size:15px;">Plot No</th>
                                        <th style="font-size:15px;">Sqft</th>
                                        <th style="font-size:15px;">Rate / Sqft</th>
                                        <th style="font-size:15px;">Total</th>
                                        <th style="font-size:15px;">Paid Amount</th>
                                        <th style="font-size:15px;">Balance</th>
                                    </tr>
                                </thead>
                                <tbody class="bookingplot_fields">
                                    <tr>
                                       <td><input class="form-control digits" name="block" id="block" type="text" readonly value="{{$Bookingplots->block}}"></td>
                                       <td><input class="form-control digits" name="plotno" id="plotno" type="text" readonly value="{{$plotno}}">
                                       </td>
                                       <td><input type="text" class="form-control sqft" id="sqft" name="sqft"
                                                 value="{{$Bookingplots->square_feet}}" readonly /></td>
                                       <td><input type="text" class="form-control ratepersqft" id="ratepersqft" name="ratepersqft"
                                                value="{{$getplot->rate_per_Sq_ft}}" readonly /></td>
                                       <td><input type="text" class="form-control " id="" name=""
                                                value="{{$totalamount}}" style="background: green;color: white;" readonly /></td>
                                                <input type="hidden" name="plot_id" value="{{ $plotid }}"/>
                                                <input type="hidden" name="booking_id" value="{{ $booking_id }}"/>
                                                <input type="hidden" name="totalamount" class="bookingtotalamount" value="{{ $total }}"/>
                                       <td><input type="text" class="form-control total_paid" id="total_paid" name="total_paid"
                                                value="{{$Bookingplots->paid_amount}}" style="background: #e0ddff;" readonly /></td>
                                       <td><input type="text" class="form-control bookingtotal_balance" id="total_balance" name="total_balance"
                                                value="{{$Bookingplots->balance_amount}}" style="background: #ffaa056e;" readonly /></td>
                                    </tr>
                                </tbody>
                              </table>
                           </div>
                        </div>




                        <div class="row" style="margin-bottom:40px;">

                           <div class="table-responsive col-lg-12 col-sm-12 col-12">
                              <table class="table">
                                 <thead>
                                    <tr style="background: #f8f9fa;">
                                        <th style="font-size:15px;">Payment Method</th>
                                        <th style="font-size:15px;">Terms</th>
                                        <th style="font-size:15px;">Amount</th>
                                        <th style="font-size:15px;">Balance</th>
                                    </tr>
                                </thead>
                                <tbody class="bookingplot_fields">
                                @if ($BookingPayment != '')
                                @foreach ($BookingPayment as $keydata => $BookingPayments)
                                    <tr>
                                       <td><input type="text" class="form-control" readonly value="{{$BookingPayments->payment_method}}" /></td>
                                       <td><input type="text" class="form-control" readonly value="{{$BookingPayments->terms}}" /></td>
                                       <td><input type="text" class="form-control" readonly value="{{$BookingPayments->payableamount}}" /></td>
                                       <td></td>
                                    </tr>
                                @endforeach
                                @endif
                                    <tr>
                                       <td>
                                       <select class="form-select" id="validationTooltip04" required="" name="payment_method">
                                             <option selected="" disabled="" value="">Choose...</option>
                                             @foreach ($Payment as $Payments)
                                             <option value="{{ $Payments->name }}">{{ $Payments->name }}</option>
                                             @endforeach
                                       </select>
                                       </td>
                                       <td>
                                          <select class="form-select" id="terms" name="terms" required="">
                                             <option selected="" disabled="" value="">Choose...</option>
                                                <option value="Term I">Term I</option>
                                                <option value="Term II">Term II</option>
                                                <option value="Term III">Term III</option>
                                                <option value="Term IV">Term IV</option>
                                          </select>
                                       </td>
                                       <td><input type="text" class="form-control payableamount" id="payableamount" name="payableamount"
                                                placeholder="Payable Amount" required="" /></td>

                                       <td><input type="text" class="form-control paymentbalance" id="balance" name="balance"
                                                placeholder="" readonly value=""/></td>
                                    </tr>

                                </tbody>
                              </table>
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
@endsection
