@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Booking</h4>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group mb-0 me-0"></div>
                            <a class="btn btn-primary" href="{{ route('booking.create') }}">New Booking</a>
                            <form autocomplete="off" method="POST" action="{{ route('booking.datefilter') }}">
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
                        <div class="table-responsive">
                            <table class="display" id="basic-1">
                                <thead>
                                    <tr>
                                        <th>Sl. No</th>
                                        <th>Date</th>
                                        <th>Plot No</th>
                                        <th>Customer</th>
                                        <th>Mobile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bookings as $keydata => $bookingsdata)
                                        <tr>
                                            <td>{{ ++$keydata }}</td>
                                            <td>{{ date('d-m-Y', strtotime($bookingsdata['date']))   }}</td>
                                            <td>@foreach ($bookingsdata['plot_terms'] as $index => $terms_array)
                                                    @if ($terms_array['booking_id'] == $bookingsdata['id'])
                                                   <span style="margin-bottom: 10px;"> Plot No :{{ $terms_array['plot_no'] }} - Sq.Ft : {{ $terms_array['Sq_ft'] }},
                                                        @if ($terms_array['balance_amount'] != '0')
                                                        <a href="{{ route('booking.payment', ['plotid' => $terms_array['plot_id'], 'booking_id' => $bookingsdata['id']]) }}"
                                                            class=" btn-sm" style="color: white;background-color:#5c2734; padding:7px; margin-left: 10px; border-radius:5px;">Payment</a>
                                                        @endif

                                                    </span><br/>
                                                    @endif
                                                    @endforeach</td>
                                            <td>{{ $bookingsdata['customername']   }}</td>
                                            <td>{{ $bookingsdata['mobileno']   }}</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit">
                                                    <a href="{{ route('booking.edit', ['unique_key' => $bookingsdata['unique_key']]) }}"
                                                            class="btn" style="color: white;background-color:#98b420;">Edit</a>
                                                    </li>
                                                    <li class="delete">
                                                        <button class="btn " type="button" data-bs-toggle="modal"
                                                            data-bs-target="#bookingModalgetbootstrapdelete{{$bookingsdata['unique_key']}}"
                                                            data-whatever="@getbootstrap" style="background-color:#d32626;"> Delete</button>
                                                        <div class="modal fade" id="bookingModalgetbootstrapdelete{{$bookingsdata['unique_key']}}" tabindex="-1"
                                                            role="dialog" aria-labelledby="bookingModalgetbootstrapdelete{{$bookingsdata['unique_key']}}"
                                                            aria-hidden="true">
                                                            @include('pages.backend.booking.delete')
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
@endsection
