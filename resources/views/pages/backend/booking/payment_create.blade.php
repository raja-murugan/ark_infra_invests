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
                            <a class="btn btn-primary" href="{{ route('booking.payment_receipt') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">



                    <form class="row g-3 needs-validation" autocomplete="off" method="POST" action="{{ route('booking.payment_store') }}" enctype="multipart/form-data">
                    @csrf

                        <div class="row" style="margin-top:25px;">
                           <div class="col-xl-3 col-sm-3">
                           <label class="form-label" for="">Block<span class="txt-danger">*</span></label>
                              <select class="form-select payment_block" id="payment_block" name="payment_block" required="">
                                 <option selected="" disabled="" value="">Choose...</option>
                                 <option value="A">A</option>
                                 <option value="B">B</option>
                                 <option value="C">C</option>
                                 <option value="D">D</option>
                              </select>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                           <label class="form-label" for="">Plot<span class="txt-danger">*</span></label>
                              <select class="form-select payment_plotid" id="payment_plotid" name="payment_plotid" required="">
                                 <option selected="" disabled="" value="">Choose...</option>
                              </select>
                           </div>
                        </div>

                       

                     <div class="payment_div" style="display:none;">
                        <div class="row" style="">
                             

                              <div class="col-xl-12 col-sm-12" style="margin-top: 40px;">
                              <h6>Customer Details</h6><br/>
                                 <div class="card crypto-main-card">
                                    <div class="card-body">
                                       <div class="deposit-wrap">
                                       <div>
                                          <h5 class="payment_customername"></h5>
                                          <p class="payment_address"></p>
                                          <p>Phone Number : <span class="payment_mobileno"></span></p>
                                       </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>


                        </div>


                        <div class="row" style="margin-bottom:40px;">
                           <div class="col-xl-2 col-sm-2">
                              <label class="form-label" for="">Date<span class="txt-danger">*</span></label>
                              <input class="form-control digits" name="payment_date" id="payment_date" type="date" required="" value="{{$today}}">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-2 col-sm-2">
                              <label class="form-label" for="">Sqft</label>
                              <input class="form-control digits" name="payment_sqft" id="payment_sqft" type="text" readonly >
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-2 col-sm-2">
                              <label class="form-label" for="">Rate / Sqft</label>
                              <input class="form-control digits" name="payment_ratepersqft" id="payment_ratepersqft" type="text" readonly >
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-2 col-sm-2">
                              <label class="form-label" for="">Total</label>
                              <input class="form-control digits" name="payment_total" id="payment_total" type="text" readonly style="background: green;color: white;">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-2 col-sm-2">
                              <label class="form-label" for="">Paid Amount</label>
                              <input class="form-control digits" name="payment_paidamount" id="payment_paidamount" type="text" readonly style="background: #e0ddff;">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-2 col-sm-2">
                              <label class="form-label" for="">Balance Amount</label>
                              <input class="form-control digits" name="payment_balanceamount" id="payment_balanceamount" type="text" readonly style="background: #ffaa056e;">
                              <div class="valid-feedback">Looks good!</div>
                              <input type="hidden" name="payment_bookingid" id="payment_bookingid" value=""/>
                              <input type="hidden" name="payment_plotno" id="payment_plotno" value=""/>
                           </div>
                        </div>



                        <div class="row" style="margin-bottom:40px;">

                           <div class="table-responsive col-lg-12 col-sm-12 col-12">
                              <table class="table">
                                 <thead>
                                    <tr style="background: #f8f9fa;">
                                       <th style="font-size:15px;">Bill No</th>
                                       <th style="font-size:15px;">Payment Method</th>
                                       <th style="font-size:15px;">Terms</th>
                                       <th style="font-size:15px;">Amount</th>
                                    </tr>
                              </thead>
                              <tbody id="bookingoldplot_fields"></div>
                              <tbody class="booking_new" style="display:none;">
                                    <tr>
                                       <td></td>
                                       <td>
                                       <select class="form-select" id="validationTooltip04" required="" name="payment_method">
                                             <option selected="" disabled="" value="">Choose...</option>
                                             @foreach ($Payment as $Payments)
                                             <option value="{{ $Payments->name }}">{{ $Payments->name }}</option>
                                             @endforeach
                                       </select>
                                       </td>
                                       <td>
                                          <select class="form-select" id="terms" name="payment_terms" required="">
                                             <option selected="" disabled="" value="">Choose...</option>
                                                <option value="Term I">Term I</option>
                                                <option value="Term II">Term II</option>
                                                <option value="Term III">Term III</option>
                                                <option value="Term IV">Term IV</option>
                                          </select>
                                       </td>
                                       <td><input type="text" class="form-control payment_payableamount" id="payableamount" name="payableamount"
                                                placeholder="Payable Amount" required="" /></td>

                                       <td><input type="text" class="form-control payment_balance" id="balance" name="balance"
                                                placeholder="Balance Amount" readonly value=""/></td>
                                    </tr>

                              </tbody>
                              </table>
                           </div>
                        </div>
                        <div class="col-md-12 booking_new">
                              <button class="btn btn-primary" type="submit">Add</button>
                        </div>

                     </div>


                    
                </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
