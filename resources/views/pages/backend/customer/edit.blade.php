@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                     
                        <div class="col-md-6">
                            <h4>Update Profile</h4>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-0 me-0"></div>
                            <a class="btn btn-primary" href="{{ route('customer.index') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">



                    <form class="row g-3 needs-validation" autocomplete="off" method="POST" action="{{ route('customer.update', ['id' => $CustomerData->id]) }}" enctype="multipart/form-data">
                    @method('PUT')
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
                              <input class="form-control" id="phone_number" name="phone_number" type="text" placeholder="Enter Contact Number" value="{{$CustomerData->phone_number}}">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           <div class="col-xl-6 col-sm-6">
                              <label class="form-label" for="">Alternate Mobile Number<span class="txt-danger">*</span></label>
                              <input class="form-control" id="alternate_mobileno"  name="alternate_mobileno" type="text" placeholder="Alternate contact number" value="{{$CustomerData->alternate_mobileno}}">
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                        </div>


                        <div class="row g-3 needs-validation custom-input">
                           <div class="col-xl-12 col-sm-12">
                              <label class="form-label" for="">Address<span class="txt-danger">*</span></label>
                              <textarea name="address" id="address" class="form-control" required="">{{$CustomerData->address}}</textarea>
                              <div class="valid-feedback">Looks good!</div>
                           </div>
                           
                        </div>



                        

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
