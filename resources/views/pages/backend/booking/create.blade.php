@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>New Booking</h4>
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



                    <form class="row g-3 needs-validation" autocomplete="off" method="POST" action="{{ route('booking.store') }}" enctype="multipart/form-data">
                    @csrf


                    <h6>Personal Details</h6>
                        <div class="row" style="margin-top:25px;">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Date<span class="txt-danger">*</span></label>
                              <input class="form-control digits" name="date" id="date" type="date" required="" value="{{$today}}">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Customer<span class="txt-danger">*</span></label>
                              <input class="form-control" id="customername"  name="customername" type="text" placeholder="Enter Customer" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">FatherName/HusbandName<span class="txt-danger">*</span></label>
                              <input class="form-control" id="fathername" name="fathername" type="text" placeholder="Enter Father Name / Husband Name" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Mobile No<span class="txt-danger">*</span></label>
                              <input class="form-control" id="mobileno"  name="mobileno" type="number" placeholder="Mobile No" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>
                        <div class="row" style="margin-top:25px;">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Proof<span class="txt-danger">*</span></label>
                              <select class="form-select" id="validationTooltip04" required="" name="idproofone">
                                 <option selected="" disabled="" value="">Choose...</option>
                                 <option value="Aadhaar">Aadhaar</option>
                                 <option value="Pan card">Pan card</option>
                                 <option value="Driving Licence">Driving Licence</option>
                                 <option value="Voter Id">Voter Id</option>
                                 <option value="Ration Card">Ration Card</option>
                            </select>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">ID Proof<span class="txt-danger">*</span></label>
                              <input class="form-control" id="idproof_no"  name="idproof_no" type="text" placeholder="ID Proof" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>
<br/>
                     <h6 style="margin-top:25px;">Address Details</h6>

                        <div class="row" style="margin-top:25px;">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Address<span class="txt-danger">*</span></label>
                              <input class="form-control" id="address"  name="address" type="text" placeholder="Address" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Street<span class="txt-danger">*</span></label>
                              <input class="form-control" id="street"  name="street" type="text" placeholder="Street" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Area<span class="txt-danger">*</span></label>
                              <input class="form-control" id="area"  name="area" type="text" placeholder="Area" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">City<span class="txt-danger">*</span></label>
                              <input class="form-control" id="city"  name="city" type="text" placeholder="City" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>
                        <div class="row" style="margin-top:25px;">
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Pincode<span class="txt-danger">*</span></label>
                              <input class="form-control" id="pincode"  name="pincode" type="number" placeholder="Pincode" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Date Of Site Visit<span class="txt-danger">*</span></label>
                              <input class="form-control" id="dateof_site_visit"  name="dateof_site_visit" type="date" placeholder="Date Of Site Visit" required="">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-3 col-sm-3">
                              <label class="form-label" for="">Reference<span class="txt-danger">*</span></label>
                              <select class="form-select" id="validationTooltip04" required="" name="reference">
                                 <option selected="" disabled="" value="">Choose...</option>
                                 @foreach ($Reference as $References)
                                 <option value="{{ $References->id }}">{{ $References->name }}</option>
                                 @endforeach
                            </select>
                           </div>
                        </div>


                        <br/>
                     <h6 style="margin-top:30px;">Plot Details</h6>


                        <div class="row" style="margin-top:25px;">
                           <div class="table-responsive col-lg-10 col-sm-12 col-12">
                              <table class="table">
                                 <thead>
                                    <tr style="background: #f8f9fa;">
                                       <th style="font-size:15px;">Block</th>
                                        <th style="font-size:15px;">Plot No</th>
                                        <th style="font-size:15px;">Sqft</th>
                                    </tr>
                                </thead>
                                <tbody class="bookingplot_fields">
                                    <tr>
                                       <td>
                                       <select class="form-select booking_block" id="booking_block1" name="booking_block[]" required="">
                                          <option selected="" disabled="" value="">Choose...</option>
                                             <option value="A">A</option>
                                             <option value="B">B</option>
                                             <option value="C">C</option>
                                             <option value="D">D</option>
                                          </select>
                                       </td>
                                       <td>
                                          <input type="hidden" id="bookingplot_id" name="bookingplot_id[]" />
                                            <select class="form-control js-example-basic-single plot_id select" name="plot_id[]"
                                                id="plot_id1" required>
                                                <option selected="" disabled="" value="">Choose...</option>
                                            </select>
                                       </td>
                                       <td><input type="text" class="form-control square_feet" id="square_feet1" name="square_feet[]"
                                                placeholder="Square Feet" value="" readonly />
                                             <input type="hidden" class="form-control plot_no" id="plot_no1" name="plot_no[]"/></td>
                                    </tr>

                                    <tr>
                                       <td>
                                       <select class="form-select booking_block" id="booking_block2" name="booking_block[]">
                                          <option selected="" disabled="" value="">Choose...</option>
                                             <option value="A">A</option>
                                             <option value="B">B</option>
                                             <option value="C">C</option>
                                             <option value="D">D</option>
                                          </select>
                                       </td>
                                       <td>
                                          <input type="hidden" id="bookingplot_id" name="bookingplot_id[]" />
                                            <select class="form-control js-example-basic-single plot_id select" name="plot_id[]"
                                                id="plot_id2">
                                                <option selected="" disabled="" value="">Choose...</option>
                                            </select>
                                       </td>
                                       <td><input type="text" class="form-control square_feet" id="square_feet2" name="square_feet[]"
                                                placeholder="Square Feet" value="" readonly />
                                             <input type="hidden" class="form-control plot_no" id="plot_no2" name="plot_no[]"/></td>
                                       {{-- <td><button style="width: 35px;background: #9c2b24;"class="py-1 text-white remove-extratr font-medium rounded-lg
                                             text-sm  text-center btn" type="button" id="" value="Add">-</button></td> --}}
                                    </tr>

                                    <tr>
                                       <td>
                                       <select class="form-select booking_block" id="booking_block3" name="booking_block[]">
                                          <option selected="" disabled="" value="">Choose...</option>
                                             <option value="A">A</option>
                                             <option value="B">B</option>
                                             <option value="C">C</option>
                                             <option value="D">D</option>
                                          </select>
                                       </td>
                                       <td>
                                          <input type="hidden" id="bookingplot_id" name="bookingplot_id[]" />
                                            <select class="form-control js-example-basic-single plot_id select" name="plot_id[]"
                                                id="plot_id3">
                                                <option selected="" disabled="" value="">Choose...</option>
                                            </select>
                                       </td>
                                       <td><input type="text" class="form-control square_feet" id="square_feet3" name="square_feet[]"
                                                placeholder="Square Feet" value="" readonly />
                                             <input type="hidden" class="form-control plot_no" id="plot_no3" name="plot_no[]"/></td>
                                       {{-- <td><button style="width: 35px;background: #9c2b24;"class="py-1 text-white remove-extratr font-medium rounded-lg
                                             text-sm  text-center btn" type="button" id="" value="Add">-</button></td> --}}
                                    </tr>

                                    <tr>
                                       <td>
                                       <select class="form-select booking_block" id="booking_block4" name="booking_block[]">
                                          <option selected="" disabled="" value="">Choose...</option>
                                             <option value="A">A</option>
                                             <option value="B">B</option>
                                             <option value="C">C</option>
                                             <option value="D">D</option>
                                          </select>
                                       </td>
                                       <td>
                                          <input type="hidden" id="bookingplot_id" name="bookingplot_id[]" />
                                            <select class="form-control js-example-basic-single plot_id select" name="plot_id[]"
                                                id="plot_id4">
                                                <option selected="" disabled="" value="">Choose...</option>
                                            </select>
                                       </td>
                                       <td><input type="text" class="form-control square_feet" id="square_feet4" name="square_feet[]"
                                                placeholder="Square Feet" value="" readonly />
                                             <input type="hidden" class="form-control plot_no" id="plot_no4" name="plot_no[]"/></td>
                                       {{-- <td><button style="width: 35px;background: #9c2b24;"class="py-1 text-white remove-extratr font-medium rounded-lg
                                             text-sm  text-center btn" type="button" id="" value="Add">-</button></td> --}}
                                    </tr>




                                </tbody>
                              </table>
                           </div>
                        </div>


                        <br/>

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
