@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>Receipt</h4>
                        </div>
                        <div class="col-md-4">
                        <button  onclick="printDiv('printableArea')"  class="btn-success btn" ><i class="fa fa-print"></i> Print</button>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12">
                <div class="card">

                <div  id="printableArea">
                    <div class="card-body">

                        <h5 style="text-align:center;text-decoration: underline;margin-bottom:30px;color: #783545;">RECEIPT</h5>
                           
                        <table class="table">
                            <tr class="border" style="">
                                <td class="border" style="width:35%;font-size:14px;border: 1px solid #b68c96! important;color: #783545;">Receipt No :  <span style="font-weight:500;">{{ $BookingPaymentdata->bill_no }}</span></td>
                                <td class="border" style="width:35%;font-size:14px;border: 1px solid #b68c96! important;color: #783545;">Receipt Date :  <span style="font-weight:500;">{{ date('d-m-Y', strtotime($BookingPaymentdata->date)) }}</span></td>
                                <td class="border" style="width:30%;font-size:14px;border: 1px solid #b68c96! important;color: #783545;">Plot No : <span style="font-weight:500;">{{ $BookingPaymentdata->plot_no }}</span></td>
                            </tr>
                            <tr class="border" style="border: 1px solid #b68c96! important;">
                                <td class="border" style="font-size:14px;border: 1px solid #b68c96! important;color: #783545;">Customer Name : </td>
                                <td class="" style="border-bottom: 1px solid #b68c96! important;color: #783545;"><span style="font-weight:500;font-size:14px;">{{ $BookingData->customername }}</span></td>
                            </tr>
                            <tr class="border" style="border: 1px solid #b68c96! important;">
                                <td class="border" style="font-size:14px;border: 1px solid #b68c96! important;color: #783545;">Address : </td>
                                <td class="" style="border-bottom: 1px solid #b68c96! important;"><span style="font-weight:500;font-size:14px;color: #783545;">
                                            {{ $BookingData->address }}, {{ $BookingData->street }}, {{ $BookingData->area }}, {{ $BookingData->city }} - {{ $BookingData->pincode }}
                                            </span></td>
                            </tr>
                            <tr class="border" style="border: 1px solid #b68c96! important;">
                                <td class="border" style="font-size:14px;border: 1px solid #b68c96! important;color: #783545;">Contact Number : <span style="font-weight:500;font-size:14px;">{{ $BookingData->mobileno }}</span></td>
                                <td class="" style="font-size:14px;border-bottom: 1px solid #b68c96! important;color: #783545;">Project Name : <span style="font-weight:500;font-size:14px;"> ERAIVAN NAGAR </span></td>
                            </tr>
                            <tr class="border" style="border: 1px solid #b68c96! important;">
                                <td class="border" style="font-size:14px;border: 1px solid #b68c96! important;color: #783545;">Project Location : <span style="font-weight:500;font-size:14px;"> ARIYALUR </span></td>
                                <td class="" style="font-size:14px;border-bottom: 1px solid #b68c96! important;color: #783545;">Total Sqft : <span style="font-weight:500;">{{ $BookingPaymentdata->sqft }}</span></td>
                            </tr>
                        </table>

                            <br/>

                        <table class="table">
                            <tr class="border"style="border: 1px solid #b68c96! important;">
                                <td  style="width:35%;font-size:14px;border-bottom: 1px solid #b68c96! important;color: #783545;font-weight:500;">S No</td>
                                <td  style="width:35%;font-size:14px;border-bottom: 1px solid #b68c96! important;color: #783545;font-weight:500;">Particulars</td>
                                <td class="border" style="width:30%;font-size:14px;border: 1px solid #b68c96! important;color: #783545;font-weight:500;">Amount</td>
                            </tr>

                            <tr class="border" style="border: 1px solid #b68c96! important;">
                                <td style="font-weight:500;font-size:14px;border: 1px solid #b68c96! important;color: #783545;">1.</td>
                                <td style="font-weight:500;font-size:14px;border: 1px solid #b68c96! important;color: #783545;">{{ $BookingPaymentdata->block }} Block - Plot No {{ $BookingPaymentdata->plot_no }}</td>
                                <td class="border" style="font-weight:500;font-size:14px;border: 1px solid #b68c96! important;color: #783545;">{{ $total }}</td>
                            </tr>
                            <tr class="border" style="border: 1px solid #b68c96! important;">
                                <td style="border-bottom: 1px solid #b68c96! important;"></td>
                                <td style="text-align:right;font-size:14px;border-bottom: 1px solid #b68c96! important;color: #783545;font-weight:500;">Total : </td>
                                <td class="border" style="font-weight:500;font-size:14px;border: 1px solid #b68c96! important;color: #783545;">{{ $total }}</td>
                            </tr>
                            <tr class="border"style="border: 1px solid #b68c96! important;">
                                <td style="border: 1px solid #b68c96! important;color: #783545;font-weight:500;">In Words : </td>
                                <td class="" style="font-weight:500;font-size:14px;border-bottom: 1px solid #b68c96! important;color: #783545;">{{$get_amount}}</td>
                            </tr>
                        </table>

                        <br/>
                        <table class="table">
                                <h5 style="text-align:center;text-decoration: underline;margin-bottom:30px;color: #783545;">நிபந்தனைகள்</h5>

                            <style>
                            ul.a {
                            list-style-type: square;
                            }
                            </style>
                            <div class="row">
                                <ul class="">
                                    <li style="font-weight:500;font-size:14px;color: #783545;">. இந்த ரசீது தற்காலிக புக்கிங் ரசீதாகும்.இதில் குறிப்பிட்டுள்ள மனையானது 15 நாட்களுக்கு மட்டுமே தங்கள் பெயரில் வைக்கப்படும்.</li><br/>
                                    <li style="font-weight:500;font-size:14px;color: #783545;">. 15 நாட்களுக்கு மேல் தாமதமானால் வேறு எந்த மனை உள்ளதோ அதை எடுத்துக் கொள்ளலாம் அல்லது கட்டிய பணத்தை திரும்ப பெற்றுக்கெள்ளலாம்.</li><br/>
                                    <li style="font-weight:500;font-size:14px;color: #783545;">. பத்திர பதிவிற்கு 6 நாட்களுக்கு முன்னதாக பத்திர பதிவிற்கான ஆவணங்களை (அடையாள அட்டை) அசல் கொடுத்து அதற்கான விண்ணப்ப படிவத்தை பூர்த்தி செய்து தரவேண்டும்.</li><br/>
                                    <li style="font-weight:500;font-size:14px;color: #783545;">. பத்திர பதிவிற்கு முன்னதாக முழுத்தொகையும் செலுத்தப்பட வேண்டும்.</li><br/><br/>
                                    <li style="font-weight:800;font-size:14px;color: #783545;">. முழுத்தெகையும் செலுத்த வரும்போது அனைத்து ரசீதுகளையும் அவசியமாக கொண்டு வரவும்</li><br/>
                                    <li style="font-weight:500;font-size:14px;color: #783545;">-------------------------------------------------------------------------------------------------</li><br/>
                                    <li style="font-weight:500;font-size:14px;color: #783545;text-align:center;">மேற்கண்ட நிபந்தனைகள் அனைத்தையும் முழுமையாக தெரிந்து கொண்டேன். முழு மன <br/>நிறைவுடன் மேற்கண்ட மனையை புக்கிங் செய்கிறேன்.</li>
                                </ul>
                                
                            </div>
                                
                        </table>

                        <br/><br/>
                        <div class="row">
                            <div class="col-3">
                                <span style="color: #5f5faf;font-size: 17px;">Customer Signature</span>
                            </div>
                            <div class="col-5"></div>
                            <div class="col-4">
                                <span style="color: #5f5faf;font-size: 17px;">Authorised Signatory</span>
                            </div>
                        </div>










                    </div>
                </div>



                </div>
            </div>
        </div>
    </div>
@endsection
