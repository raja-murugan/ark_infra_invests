@extends('layout.backend.auth')
@section('content')




<div class="container-fluid">
        <div class="row">






        <button onclick="printDiv('receiptprint')"  class="btn btn-secondary" style="width:11%;">
                                       <i class="fa fa-print"></i> Print
                                    </button>
         <div class="row gutters" >

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="receiptprint">
               <div class="card" >
                  <div class="card-body p-0">

                     <div class="invoice-container" >

                        <style>

                                 body{margin-top:20px;
                                    color: #2e323c;
                                    background: #f5f6fa;
                                    position: relative;
                                    height: 100%;
                                 }
                                 .invoice-container {
                                    padding: 1rem;
                                 }
                                 .invoice-container .invoice-header .invoice-logo {
                                    margin: 0.8rem 0 0 0;
                                    display: inline-block;
                                    font-size: 1.6rem;
                                    font-weight: 700;
                                    color: #2e323c;
                                 }
                                 .invoice-container .invoice-header .invoice-logo img {
                                    max-width: 130px;
                                 }
                                 .invoice-container .invoice-header address {
                                    font-size: 0.8rem;
                                    color: #9fa8b9;
                                    margin: 0;
                                 }
                                 .invoice-container .invoice-details {
                                    margin: 1rem 0 0 0;
                                    padding: 1rem;
                                    line-height: 180%;
                                    background: #f5f6fa;
                                 }
                                 .invoice-container .invoice-details .invoice-num {
                                    font-size: 0.8rem;
                                 }
                                 .invoice-container .invoice-body {
                                    padding: 1rem 0 0 0;
                                 }
                                 .invoice-container .invoice-footer {
                                    text-align: center;
                                    font-size: 0.7rem;
                                    margin: 5px 0 0 0;
                                 }

                                 .invoice-status {
                                    text-align: center;
                                    padding: 1rem;
                                    background: #ffffff;
                                    -webkit-border-radius: 4px;
                                    -moz-border-radius: 4px;
                                    border-radius: 4px;
                                    margin-bottom: 1rem;
                                 }
                                 .invoice-status h2.status {
                                    margin: 0 0 0.8rem 0;
                                 }
                                 .invoice-status h5.status-title {
                                    margin: 0 0 0.8rem 0;
                                    color: #9fa8b9;
                                 }
                                 .invoice-status p.status-type {
                                    margin: 0.5rem 0 0 0;
                                    padding: 0;
                                    line-height: 150%;
                                 }
                                 .invoice-status i {
                                    font-size: 1.5rem;
                                    margin: 0 0 1rem 0;
                                    display: inline-block;
                                    padding: 1rem;
                                    background: #f5f6fa;
                                    -webkit-border-radius: 50px;
                                    -moz-border-radius: 50px;
                                    border-radius: 50px;
                                 }
                                 .invoice-status .badge {
                                    text-transform: uppercase;
                                 }

                                 @media (max-width: 767px) {
                                    .invoice-container {
                                       padding: 1rem;
                                    }
                                 }


                                 .custom-table {
                                    border: 1px solid #e0e3ec;
                                 }
                                 .custom-table thead {
                                    background: #007ae1;
                                 }
                                 .custom-table thead th {
                                    border: 0;
                                    color: #ffffff;
                                 }
                                 .custom-table > tbody tr:hover {
                                    background: #fafafa;
                                 }
                                 .custom-table > tbody tr:nth-of-type(even) {
                                    background-color: #ffffff;
                                 }
                                 .custom-table > tbody td {
                                    border: 1px solid #e6e9f0;
                                 }


                                 .card {
                                    background: #ffffff;
                                    -webkit-border-radius: 5px;
                                    -moz-border-radius: 5px;
                                    border-radius: 5px;
                                    border: 0;
                                    margin-bottom: 1rem;
                                 }

                                 .text-success {
                                    color: #00bb42 !important;
                                 }

                                 .text-muted {
                                    color: #9fa8b9 !important;
                                 }

                                 .custom-actions-btns {
                                    margin: auto;
                                    display: flex;
                                    justify-content: flex-end;
                                 }

                                 .custom-actions-btns .btn {
                                    margin: .3rem 0 .3rem .3rem;
                                 }
                                 </style>

                        <div class="invoice-header">
                           <!-- Row start -->

                           <!-- Row end -->
                           <!-- Row start -->
                           <div class="row gutters">
                              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <a href="index.html" class="invoice-logo">
                                    <span>ARK INVEST </span> - Diwali Savings Fund Scheme
                                 </a>
                              </div>
                           </div>
                           <!-- Row end -->
                           <!-- Row start -->
                           <div class="row gutters">
                              <div class="col-xl-7 col-lg-7 col-md-7  ">
                                 <div class="invoice-details">
                                    <div class="invoice-num">
                                    <span style="color:black;font-weight:700">Ark Infra Invest</span><br>
                                       <i class="fa fa-phone"></i>9092759389
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xl-5 col-lg-5 col-md-5 ">
                                 <div class="invoice-details">
                                    <div class="invoice-num">
                                       <div>Bill No : {{$OrderData->razorpay_order_id}}</div>
                                       <div>Date : {{date('d-m-Y', strtotime($OrderData->date))}}</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- Row end -->
                        </div>
                        <div class="invoice-body">
                           <!-- Row start -->
                           <div class="row gutters">
                              <div class="col-lg-12 col-md-12 col-sm-12">
                                 <div class="table-responsive">
                                    <table class="table custom-table m-0">
                                       <thead>
                                          <tr>
                                             <th>Installment</th>
                                             <th>Month</th>
                                             <th>Payment Mode</th>
                                             <th>Amount</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                          <tr>
                                             <td>
                                               {{ $OrderData->installment}}
                                             </td>
                                             <td>{{ $OrderData->month}}</td>
                                             <td>Online</td>
                                             <td>{{ $OrderData->amount}}</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                           <!-- Row end -->
                        </div>
                        <div class="invoice-footer">
                           Thank you for your Business.
                        </div>
                     </div>
                  </div>
               </div>
            </div>
	      </div>





        </div>
</div>

<script>
   function printDiv(divName) {
            var printContents = document.getElementById(divName).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
</script>
@endsection
