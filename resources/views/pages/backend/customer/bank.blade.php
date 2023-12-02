@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 style="color:red;text-transform: uppercase;">{{ Auth::user()->name }}</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <p>
                            Hello, valued customer. We apologize for inconvenience caused. Your registration process has
                            been successfully completed. Kindly deposit the required amount into the provided bank details
                            and send the receipt copy to +91 98944 43932. Should you have any concerns, please feel free to
                            contact us at any time.
                        </p>

                        <p> Account No : Ark Infra</p>
                        <p> Account Number : 1624135000009172</p>
                        <P> IFSC Code : KVBL0001624</P>
                        <P> Branch : Karur Vysya Bank, Thiruverumbur</P>
                        <a href="/home">
                            <button class="btn btn-primary btn-block" type="button">Back to Home</button>
                        </a>
                    </div>
                </div>
            </div>


            @if (Auth::user()->role == 'Super-Admin')
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
