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
                        <button  onclick="printDiv('cashprintableArea')"  class="btn-success btn" ><i class="fa fa-print"></i> Print</button>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-sm-12">
                <div class="card">

                <div  id="cashprintableArea">
                     <div class="card-body ">
                        <div class="" style="border:1px solid #4343a7;">
                           <div class="row">
                              <div class="col-xl-4"></div>
                              <div class="col-xl-4">
                                    <h5 class="" style="text-align:center;margin-bottom:30px;margin-top:18px;color:#4343a7;text-decoration-line: underline;">CASH RECEIPT</h5>
                              </div>
                              <div class="col-xl-4"></div>
                           </div>


                           <div class="row">
                              <div class="col-4"><span style="margin-left:20px;font-size:17px;"><span style="color:#4343a7;">No.  </span><span style="font-weight:500;">{{$BookingPaymentdata->bill_no}}</span></span></div>
                              <div class="col-4"></div>
                              <div class="col-4"><span style="margin-left:20px;font-size:17px;"><span style="color:#4343a7;">Date : </span><span style="font-weight:500;border-bottom: 1px solid #4343a7;">{{date('d-m-Y', strtotime($BookingPaymentdata->date))}}</span></span></div>
                           </div>
                           <br/>
                           <div class="row">
                              <div class="col-6"><span style="margin-left:20px;font-size:17px;color:#4343a7;">Received with thanks from Mr/Mrs/Ms. </span></div>
                              <div class="col-5" style="border-bottom: 1px solid #4343a7;"><span style="font-weight:500;font-size:17px;">{{$BookingData->customername}}</span></div>
                           </div>
                           <br/>
                           <div class="row">
                              <div class="col-4"><span style="margin-left:20px;font-size:17px;color:#4343a7;">a sum of Rupees </span></div>
                              <div class="col-7" style="border-bottom: 1px solid #4343a7;"><span style="font-weight:500;font-size:17px;">{{$get_amount}}</span></div>
                           </div>
                           <br/>
                           <div class="row">
                              <div class="col-6"><span style="margin-left:20px;font-size:17px;color:#4343a7;">mode of Payments Cash / Others</span></div>
                              <div class="col-5" style="border-bottom: 1px solid #4343a7;"><span style="font-weight:500;font-size:17px;">Cash</span></div>
                           </div>
                           <br/>
                           <div class="row">
                              <div class="col-3"><span style="margin-left:20px;font-size:17px;color:#4343a7;">Project Name</span></div>
                              <div class="col-3" style="border-bottom: 1px solid #4343a7;"><span style="font-weight:500;font-size:17px;">ERAIVAN NAGAR</span></div>
                              <div class="col-2"><span style="margin-left:20px;font-size:17px;color:#4343a7;">Block</span></div>
                              <div class="col-3" style="border-bottom: 1px solid #4343a7;"><span style="font-weight:500;font-size:17px;">{{$BookingPaymentdata->block}}</span></div>
                           </div>
                           <br/>
                           <div class="row">
                              <div class="col-2"><span style="margin-left:20px;font-size:17px;color:#4343a7;">Plot No</span></div>
                              <div class="col-4" style="border-bottom: 1px solid #4343a7;"><span style="font-weight:500;font-size:17px;">{{$BookingPaymentdata->plot_no}}</span></div>
                              <div class="col-2"><span style="margin-left:20px;font-size:17px;color:#4343a7;">Reference</span></div>
                              <div class="col-3" style="border-bottom: 1px solid #4343a7;"><span style="font-weight:500;font-size:17px;"></span></div>
                           </div>
                           <br/><br/>
                           <div class="row">
                              <div class="col-4" >
                                 <table style="margin-left:20px;font-size:17px;">
                                    <tr class="">
                                       <th class="" style="width:20%;border:1px solid #4343a7;background:#4343a7;color:white;">Rs.</th>
                                       <th class="" style="width:80%;border:1px solid #4343a7;">{{$total}} /-</th>
                                    </tr>
                                 </table>
                              </div>
                              <div class="col-5"></div>
                              <div class="col-3"><span style="font-size:18px;color:#4343a7;">Signature</span></div>
                           </div>
                           <br/><br/>
                        </div>
                     </div>

<br/>


                     <div class="card-body ">

                        <div class="" style="border:1px solid #4343a7;">
                           <div class="row">
                              <div class="col-xl-4"></div>
                              <div class="col-xl-4">
                                    <h5 class="" style="text-align:center;margin-bottom:30px;margin-top:18px;color:#4343a7;text-decoration-line: underline;">CASH RECEIPT</h5>
                              </div>
                              <div class="col-xl-4"></div>
                           </div>


                           <div class="row">
                              <div class="col-4"><span style="margin-left:20px;font-size:17px;"><span style="color:#4343a7;">No.  </span><span style="font-weight:500;">{{$BookingPaymentdata->bill_no}}</span></span></div>
                              <div class="col-4"></div>
                              <div class="col-4"><span style="margin-left:20px;font-size:17px;"><span style="color:#4343a7;">Date : </span><span style="font-weight:500;border-bottom: 1px solid #4343a7;">{{date('d-m-Y', strtotime($BookingPaymentdata->date))}}</span></span></div>
                           </div>
                           <br/>
                           <div class="row">
                              <div class="col-6"><span style="margin-left:20px;font-size:17px;color:#4343a7;">Received with thanks from Mr/Mrs/Ms. </span></div>
                              <div class="col-5" style="border-bottom: 1px solid #4343a7;"><span style="font-weight:500;font-size:17px;">{{$BookingData->customername}}</span></div>
                           </div>
                           <br/>
                           <div class="row">
                              <div class="col-4"><span style="margin-left:20px;font-size:17px;color:#4343a7;">a sum of Rupees </span></div>
                              <div class="col-7" style="border-bottom: 1px solid #4343a7;"><span style="font-weight:500;font-size:17px;">{{$get_amount}}</span></div>
                           </div>
                           <br/>
                           <div class="row">
                              <div class="col-6"><span style="margin-left:20px;font-size:17px;color:#4343a7;">mode of Payments Cash / Others</span></div>
                              <div class="col-5" style="border-bottom: 1px solid #4343a7;"><span style="font-weight:500;font-size:17px;">Cash</span></div>
                           </div>
                           <br/>
                           <div class="row">
                              <div class="col-3"><span style="margin-left:20px;font-size:17px;color:#4343a7;">Project Name</span></div>
                              <div class="col-3" style="border-bottom: 1px solid #4343a7;"><span style="font-weight:500;font-size:17px;">ERAIVAN NAGAR</span></div>
                              <div class="col-2"><span style="margin-left:20px;font-size:17px;color:#4343a7;">Block</span></div>
                              <div class="col-3" style="border-bottom: 1px solid #4343a7;"><span style="font-weight:500;font-size:17px;">{{$BookingPaymentdata->block}}</span></div>
                           </div>
                           <br/>
                           <div class="row">
                              <div class="col-2"><span style="margin-left:20px;font-size:17px;color:#4343a7;">Plot No</span></div>
                              <div class="col-4" style="border-bottom: 1px solid #4343a7;"><span style="font-weight:500;font-size:17px;">{{$BookingPaymentdata->plot_no}}</span></div>
                              <div class="col-2"><span style="margin-left:20px;font-size:17px;color:#4343a7;">Reference</span></div>
                              <div class="col-3" style="border-bottom: 1px solid #4343a7;"><span style="font-weight:500;font-size:17px;"></span></div>
                           </div>
                           <br/><br/>
                           <div class="row">
                              <div class="col-4" >
                                 <table style="margin-left:20px;font-size:17px;">
                                    <tr class="">
                                       <th class="" style="width:20%;border:1px solid #4343a7;background:#4343a7;color:white;">Rs.</th>
                                       <th class="" style="width:80%;border:1px solid #4343a7;">{{$total}} /-</th>
                                    </tr>
                                 </table>
                              </div>
                              <div class="col-5"></div>
                              <div class="col-3"><span style="font-size:18px;color:#4343a7;">Signature</span></div>
                           </div>
                           <br/><br/>
                        </div>
                </div>



                </div>
            </div>
        </div>
    </div>
@endsection
