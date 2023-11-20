@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Booking Receipt</h4>
                        </div>

                        <div class="col-md-6">
                            
                            <div class="form-group mb-0 me-0"></div>
                            
                            <a class="btn btn-primary" href="{{ route('booking.payment_create') }}">Add Payment</a>
                            <form autocomplete="off" method="POST" action="{{ route('booking.receiptdatefilter') }}">
                                @method('PUT')
                                @csrf
                                <div style="display: flex">
                                    <div style="margin-right: 10px;"><input type="date" name="from_date"  required
                                            class="form-control from_date" value="{{ $today }}"></div>
                                    <div style="margin-right: 10px;"><input type="submit" class="btn btn-success"
                                            value="Search" /></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">


                           <div class="col-sm-12">
                                 <div class="table-responsive">
                                    <table class="display" id="basic-1">
                                       <thead>
                                             <tr>
                                                <th>Bill No</th>
                                                <th>Date</th>
                                                <th>Plot No</th>
                                                <th>Customer</th>
                                                <th>Payment Amount</th>
                                                <th>Payment Method</th>
                                                <th>Action</th>
                                             </tr>
                                       </thead>
                                       <tbody>
                                             @foreach ($booking_receipts as $keydata => $booking_receipt)
                                                <tr>
                                                   <td>{{$booking_receipt['bill_no']}}</td>
                                                   <td>{{ date('d-m-Y', strtotime($booking_receipt['date']))   }}</td>
                                                   <td>BLOCK - {{ $booking_receipt['block']   }}, PLOT - {{ $booking_receipt['plot_no']   }}</td>
                                                   <td>{{ $booking_receipt['customername']   }}</td>
                                                   <td>{{ $booking_receipt['payableamount']   }}</td>
                                                   <td style="color:black;font-weight:600;">{{ $booking_receipt['payment_method']   }}</td>
                                                   <td>
                                                            <ul class="action">
                                                               <li class="edit">
                                                               @if ($booking_receipt['payment_method'] == 'Cash')
                                                               <a href="{{ route('booking.receptcash_print', ['unique_key' => $booking_receipt['unique_key']]) }}"
                                                                        class="btn" style="color: white;background-color:#043c11;">Print</a>
                                                               @else
                                                               <a href="{{ route('booking.recept_print', ['unique_key' => $booking_receipt['unique_key']]) }}"
                                                                        class="btn" style="color: white;background-color:#043c11;">Print</a>
                                                               @endif

                                                               </li>
                                                               <li class="edit">
                                                                  <a href="{{ route('booking.recept_edit', ['unique_key' => $booking_receipt['unique_key']]) }}"
                                                                        class="btn" style="color: white;background-color:#98b420;">Edit</a>
                                                               </li>
                                                               <li class="delete">
                                                                  <button class="btn " type="button" data-bs-toggle="modal"
                                                                        data-bs-target="#bookingpaymentModalgetbootstrapdelete{{$booking_receipt['unique_key']}}"
                                                                        data-whatever="@getbootstrap" style="background-color:#d32626;"> Delete</button>
                                                                  <div class="modal fade" id="bookingpaymentModalgetbootstrapdelete{{$booking_receipt['unique_key']}}" tabindex="-1"
                                                                        role="dialog" aria-labelledby="bookingpaymentModalgetbootstrapdelete{{$booking_receipt['unique_key']}}"
                                                                        aria-hidden="true">
                                                                        @include('pages.backend.booking.receipt_delete')
                                                                  </div>
                                                               </li>
                                                            </ul>
                                                   </td>
                                                </tr>
                                             @endforeach
                                       </tbody>
                                    </table>
                                 </div>
                           </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
