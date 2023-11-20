@extends('layout.backend.auth')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 project-list" style="margin-top: 30px;">
                <div class="card">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Expense</h4>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-0 me-0"></div>
                            <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#expensegetbootstrap" data-whatever="@getbootstrap"> <i
                                    data-feather="plus-square"> </i>Add Expense</button>
                            <div class="modal fade" id="expensegetbootstrap" tabindex="-1" role="dialog"
                                aria-labelledby="expensegetbootstrap" aria-hidden="true">
                                @include('pages.backend.expense.create')
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
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Amount</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $keydata => $expensedata)
                                        <tr>
                                            <td>{{ ++$keydata }}</td>
                                            <td>{{ date('d-m-Y', strtotime($expensedata->date)) }}</td>
                                            <td>{{ $expensedata->description }}</td>
                                            <td>{{ $expensedata->amount }}</td>
                                            <td>
                                                <ul class="action">
                                                    <li class="edit">
                                                        <button class="btn btn-success active" type="button" title="btn btn-success active"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#expensegetbootstrapedit{{$expensedata->unique_key}}"
                                                            data-whatever="@getbootstrap"> Edit</button>
                                                        <div class="modal fade" id="expensegetbootstrapedit{{$expensedata->unique_key}}"
                                                            tabindex="-1" role="dialog"
                                                            aria-labelledby="expensegetbootstrapedit{{$expensedata->unique_key}}"
                                                            aria-hidden="true">
                                                            @include('pages.backend.expense.edit')
                                                        </div>
                                                    </li>
                                                    <li class="delete">
                                                        <button class="btn " type="button" data-bs-toggle="modal"
                                                            data-bs-target="#expenseModalgetbootstrapdelete{{$expensedata->unique_key}}"
                                                            data-whatever="@getbootstrap" style="background-color:#d32626;"> Delete</button>
                                                        <div class="modal fade" id="expenseModalgetbootstrapdelete{{$expensedata->unique_key}}" tabindex="-1"
                                                            role="dialog" aria-labelledby="expenseModalgetbootstrapdelete{{$expensedata->unique_key}}"
                                                            aria-hidden="true">
                                                            @include('pages.backend.expense.delete')
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
