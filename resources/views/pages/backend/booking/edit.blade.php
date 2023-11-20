@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Update Booking</h4>
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


   
                    <form class="row g-3 needs-validation" autocomplete="off" method="POST" action="{{ route('booking.update', ['unique_key' => $BookingData->unique_key]) }}" enctype="multipart/form-data">
                     @method('PUT')
                     @csrf


                    <h6>Personal Details</h6>
                        <div class="row" style="margin-top:25px;">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Date<span class="txt-danger">*</span></label>
                              <input class="form-control digits" name="date" id="date" type="date" required="" value="{{$BookingData->date}}">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Customer<span class="txt-danger">*</span></label>
                              <input class="form-control" id="customername"  name="customername" type="text" value="{{$BookingData->customername}}" placeholder="Enter Customer" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">FatherName/HusbandName<span class="txt-danger">*</span></label>
                              <input class="form-control" id="fathername" name="fathername" type="text" value="{{$BookingData->fathername}}" placeholder="Enter Father Name / Husband Name" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Mobile No<span class="txt-danger">*</span></label>
                              <input class="form-control" id="mobileno"  name="mobileno" type="number" value="{{$BookingData->mobileno}}" placeholder="Mobile No" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>
                        <div class="row" style="margin-top:25px;">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Proof<span class="txt-danger">*</span></label>
                              <select class="form-select" id="validationTooltip04" required="" name="idproofone">
                                 <option selected="" disabled="" value="">Choose...</option>
                                 <option value="Aadhaar"@if ('Aadhaar' === $BookingData->idproofone) selected='selected' @endif>Aadhaar</option>
                                 <option value="Pan card"@if ('Pan card' === $BookingData->idproofone) selected='selected' @endif>Pan card</option>
                                 <option value="Driving Licence"@if ('Driving Licence' === $BookingData->idproofone) selected='selected' @endif>Driving Licence</option>
                                 <option value="Voter Id"@if ('Voter Id' === $BookingData->idproofone) selected='selected' @endif>Voter Id</option>
                                 <option value="Ration Card"@if ('Ration Card' === $BookingData->idproofone) selected='selected' @endif>Ration Card</option>
                            </select>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">ID Proof<span class="txt-danger">*</span></label>
                              <input class="form-control" id="idproof_no"  name="idproof_no" value="{{$BookingData->idproof_no}}" type="text" placeholder="ID Proof" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>
<br/>
                     <h6 style="margin-top:60px;">Address Details</h6>

                        <div class="row" style="margin-top:25px;">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Address<span class="txt-danger">*</span></label>
                              <input class="form-control" id="address"  name="address" type="text" value="{{$BookingData->address}}" placeholder="Address" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Street<span class="txt-danger">*</span></label>
                              <input class="form-control" id="street"  name="street" type="text" value="{{$BookingData->street}}" placeholder="Street" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Area<span class="txt-danger">*</span></label>
                              <input class="form-control" id="area"  name="area" type="text" value="{{$BookingData->area}}" placeholder="Area" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">City<span class="txt-danger">*</span></label>
                              <input class="form-control" id="city"  name="city" type="text" value="{{$BookingData->city}}" placeholder="City" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>
                        <div class="row" style="margin-top:25px;">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Pincode<span class="txt-danger">*</span></label>
                              <input class="form-control" id="pincode"  name="pincode" type="number" value="{{$BookingData->pincode}}" placeholder="Pincode" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Date Of Site Visit<span class="txt-danger">*</span></label>
                              <input class="form-control" id="dateof_site_visit"  name="dateof_site_visit" value="{{$BookingData->dateof_site_visit}}" type="date" placeholder="Date Of Site Visit" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Reference<span class="txt-danger">*</span></label>
                              <select class="form-select" id="validationTooltip04" required="" name="reference">
                                 <option selected="" disabled="" value="">Choose...</option>
                                 @foreach ($Reference as $References)
                                 <option value="{{ $References->id }}"@if ($References->id === $BookingData->reference) selected='selected' @endif>{{ $References->name }}</option>
                                 @endforeach
                            </select>
                           </div>
                        </div>


                        <br/>
                     <h6 style="margin-top:60px;">Plot Details</h6>

                      
                        
                        <div class="row" style="margin-top:25px;">
                        
                           <div class="table-responsive col-lg-10 col-sm-12 col-12">
                              <table class="table">
                                 <thead>
                                    <tr style="background: #f8f9fa;">
                                        <th style="font-size:15px;">Plot No</th>
                                        <th style="font-size:15px;">Sqft</th>
                                    </tr>
                                </thead>
                                <tbody class="bookingplot_fields">
                                @foreach ($BookingPlotdata as $index => $BookingPlotdatas)
                                    <tr>
                                       <td>
                                          <select class="form-select booking_block" id="booking_block{{$index + 1}}" name="booking_block[]" required="">
                                             <option selected="" disabled="" value="">Choose...</option>
                                                <option value="A"@if ('A' === $BookingPlotdatas->block) selected='selected' @endif>A</option>
                                                <option value="B"@if ('B' === $BookingPlotdatas->block) selected='selected' @endif>B</option>
                                                <option value="C"@if ('C' === $BookingPlotdatas->block) selected='selected' @endif>C</option>
                                                <option value="D"@if ('D' === $BookingPlotdatas->block) selected='selected' @endif>D</option>
                                             </select>
                                       </td>
                                       <td>
                                          <input type="hidden" id="bookingplot_id" name="bookingplot_id[]" value="{{$BookingPlotdatas->id}}"/>
                                            <select class="form-control js-example-basic-single plot_id select" name="plot_id[]"
                                                id="plot_id{{$index + 1}}" required>
                                                <option selected="" disabled="" value="">Choose...</option>
                                                @foreach ($Plot as $Plotss)
                                                    <option value="{{ $Plotss->id }}"@if ($Plotss->id == $BookingPlotdatas->plot_id) selected='selected' @endif>{{ $Plotss->plot_no }}
                                                    </option>
                                                @endforeach
                                            </select>
                                       </td>
                                       <td><input type="text" class="form-control square_feet"  value="{{$BookingPlotdatas->square_feet}}" id="square_feet{{$index + 1}}" name="square_feet[]"
                                                placeholder="Square Feet" value="" readonly />
                                             <input type="hidden" class="form-control plot_no" id="plot_no{{$index + 1}}" name="plot_no[]"/></td>
                                       <td><button style="width: 35px;background: #9c2b24;"class="py-1 text-white remove-extratr font-medium rounded-lg text-sm  text-center btn" type="button" id="" value="Add">-</button></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                              </table>
                           </div>
                        </div>


                        <br/>

                    <div class="col-md-12">
                        <button class="btn btn-primary" type="submit">Update</button>
                    </div>
                </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
