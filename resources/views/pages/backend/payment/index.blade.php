@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Payment Details</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-0 me-0"></div>
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalgetbootstrap" data-whatever="@getbootstrap"> <i
                                    data-feather="plus-square"> </i>Add Payment Method</button>
                            <div class="modal fade" id="exampleModalgetbootstrap" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalgetbootstrap" aria-hidden="true">
                                @include('pages.backend.payment.create')
                            </div>
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
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $keydata => $paymentdata)
                                        <tr>
                                            <td>{{ ++$keydata }}</td>
                                            <td>{{ $paymentdata->name }}</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit">
                                                        <button class="btn btn-success active" type="button" title="btn btn-success active"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalgetbootstrapedit{{$paymentdata->unique_key}}"
                                                            data-whatever="@getbootstrap"> Edit</button>
                                                        <div class="modal fade" id="exampleModalgetbootstrapedit{{$paymentdata->unique_key}}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="exampleModalgetbootstrapedit{{$paymentdata->unique_key}}"
                                                            aria-hidden="true">
                                                            @include('pages.backend.payment.edit')
                                                        </div>
                                                    </li>
                                                    <li class="delete">
                                                        <button class="btn " type="button" data-bs-toggle="modal"
                                                            data-bs-target="#paymentModalgetbootstrapdelete{{$paymentdata->unique_key}}"
                                                            data-whatever="@getbootstrap" style="background-color:#d32626;"> Delete</button>
                                                        <div class="modal fade" id="paymentModalgetbootstrapdelete{{$paymentdata->unique_key}}" tabindex="-1"
                                                            role="dialog" aria-labelledby="paymentModalgetbootstrapdelete{{$paymentdata->unique_key}}"
                                                            aria-hidden="true">
                                                            @include('pages.backend.payment.delete')
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
