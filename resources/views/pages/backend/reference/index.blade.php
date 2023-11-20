@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Refernce Details</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-0 me-0"></div>
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#exampleModalgetbootstrap" data-whatever="@getbootstrap"> <i
                                    data-feather="plus-square"> </i>Gendreate Refernce ID</button>
                            <div class="modal fade" id="exampleModalgetbootstrap" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalgetbootstrap" aria-hidden="true">
                                @include('pages.backend.reference.create')
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
                                        <th>Ref ID</th>
                                        <th>Name</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $keydata => $referencedata)
                                        <tr>
                                            <td>{{ $referencedata->unique_key }}</td>
                                            <td>{{ $referencedata->name }}</td>
                                            <td>{{ $referencedata->phone_no }}</td>
                                            <td>{{ $referencedata->address }}</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit">
                                                        <button class="btn btn-success active" type="button" title="btn btn-success active"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#referenceModalgetbootstrapedit{{ $referencedata->unique_key }}"
                                                            data-whatever="@getbootstrap"> Edit</button>
                                                        <div class="modal fade" id="referenceModalgetbootstrapedit{{ $referencedata->unique_key }}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="referenceModalgetbootstrapedit{{ $referencedata->unique_key }}"
                                                            aria-hidden="true">
                                                            @include('pages.backend.reference.edit')
                                                        </div>
                                                    </li>
                                                    <li class="delete">
                                                        <button class="btn " type="button" data-bs-toggle="modal"
                                                            data-bs-target="#refernceModalgetbootstrapdelete{{$referencedata->unique_key}}"
                                                            data-whatever="@getbootstrap" style="background-color:#d32626;"> Delete</button>
                                                        <div class="modal fade" id="refernceModalgetbootstrapdelete{{$referencedata->unique_key}}" tabindex="-1"
                                                            role="dialog" aria-labelledby="refernceModalgetbootstrapdelete{{$referencedata->unique_key}}"
                                                            aria-hidden="true">
                                                            @include('pages.backend.reference.delete')
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
