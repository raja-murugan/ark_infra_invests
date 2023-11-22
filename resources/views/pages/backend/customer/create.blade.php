@extends('layout.backend.auth')

@section('content')
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



                    <form class="row g-3 needs-validation" autocomplete="off" method="POST" action="{{ route('customer.store') }}" enctype="multipart/form-data">
                    @csrf

                        <div class="row g-3 needs-validation custom-input">
                           <div class="col-xl-6 col-sm-6">
                              <label class="form-label" for="">Name<span class="txt-danger">*</span></label>
                              <input class="form-control digits" name="name" id="name" type="text" value="{{ auth()->user()->name }}" readonly>
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-6 col-sm-6">
                              <label class="form-label" for="">Email<span class="txt-danger">*</span></label>
                              <input class="form-control" id="email"  name="email" type="text" placeholder="Enter E-Mail" value="{{ auth()->user()->email }}" readonly>
                              <input type="hidden" name="userid" value="{{ auth()->user()->id }}" />
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>
                        <div class="row g-3 needs-validation custom-input">
                           <div class="col-xl-6 col-sm-6">
                              <label class="form-label" for="">Mobile Number<span class="txt-danger">*</span></label>
                              <input class="form-control" id="phone_number" name="phone_number" type="text" placeholder="Enter Contact Number" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-6 col-sm-6">
                              <label class="form-label" for="">Alternate Mobile Number<span class="txt-danger">*</span></label>
                              <input class="form-control" id="alternate_mobileno"  name="alternate_mobileno" type="text" placeholder="Alternate contact number">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>


                        <div class="row g-3 needs-validation custom-input">
                           <div class="col-xl-12 col-sm-12">
                              <label class="form-label" for="">Address<span class="txt-danger">*</span></label>
                              <textarea name="address" id="address" class="form-control" required=""></textarea>
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
@endsection
