@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Contact Us</h4>
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
                                        <th>E-Mail</th>
                                        <th>Mobile No</th>
                                        <th>Area</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $keydata => $contactusdata)
                                        <tr>
                                            <td>{{ ++$keydata }}</td>
                                            <td>{{ $contactusdata->name }}</td>
                                            <td>{{ $contactusdata->email }}</td>
                                            <td>{{ $contactusdata->phone }}</td>
                                            <td>{{ $contactusdata->area }}</td>
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
