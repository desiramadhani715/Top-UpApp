@extends('main')

@section('title', 'Top Up')
    
@section('content')

<div class="content-wrapper">
    
    <div class="content-header">
        <div class="container-fluid">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
            <div class="row mb-2">
                <div class="card col-sm-12">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark">Data Top Up</h1>
                            </div> 
                            <div class="col-sm-6 ">
                                <ol class="breadcrumb float-sm-right">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addTopUpModal">
                                        Add Top Up
                                    </button>
                                </ol>
                            </div> 
                        </div>
                    </div>
                    <div class="col-sm-10 align-self-center">
                        <table class="table mt-3 text-center">
                            <thead class="table-active">
                                <th>No. </th>
                                <th></th>
                                <th>ID</th>
                                <th>Contract Name</th>
                                <th>Identity Type</th>
                                <th>Partner</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                                @foreach($top_up as $p)
                                <tr>                        
                                    <td>{{ $loop->iteration}}</td>
                                    <td></td>
                                    <td>{{$p->id}}</td> 
                                    <td>{{$p->partner}}</td>
                                    <td>{{$p->entityType}}</td>
                                    <td>{{$p->picName}}</td>
                                    <td>{{$p->status}}</td>
                                    @endforeach
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                
                </div>
            </div>
        </div>
    </div>

    <!-- add TopUp Modal -->
    <div class="modal fade " id="addTopUpModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Top Up</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action='top_up' method="post" role="form">
                <div class="modal-body ">
                    @csrf
                    <div class="row mb-1">
                        <label class="col-md-2 col-form-label">Partner Id</label>
                        <div class="col-md-4">
                            <select name="partner" id="partner" class="form-control mb-2">
                                <option value="">--PILIH PARTNER--</option>
                                @foreach($partners as $p)
                                <option value="{{$p->partnerId}}">{{$p->partnerId}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label class="col-md-2 col-form-label">Doc Number</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label class="col-md-2 col-form-label">Contract</label>
                        <div class="col-md-4">
                            <select name="contract" id="contract" class="form-control">
                                <option value=""></option>
                                @foreach($contracts as $con)
                                <option value="{{$con->entityType}}">{{$con->entityType}}</option>
                                @endforeach
                            </select>
                        </div>
                        <label class="col-md-2 col-form-label">Doc Name</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control mb-2">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label class="col-md-2 col-form-label">Payment Type</label>
                        <div class="col-md-4 ">
                            <div class="row">
                                <div class="col-md-4 mt-2 ml-3">
                                    <input class="form-check-input " type="radio" name="paymentType" id="prepaid" value="prepaid">
                                    <label class="form-check-label" for="prepaid1">
                                        Prepaid
                                    </label>
                                </div>
                                <div class="col-md-4 mt-2 ml-3">
                                    <input class="form-check-input" type="radio" name="paymentType" id="postpaid" value="postpaid">
                                    <label class="form-check-label" for="postpaid1">
                                        Postpaid
                                    </label>
                                </div>
                            </div>
                        </div>
                        <label class="col-md-2 col-form-label">Document</label>
                        <div class="col-md-4 ml-">
                            <input type="file" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label class="col-md-2 col-form-label">Description</label>
                        <div class="col-md-4 ">
                            <textarea class="form-control mb-2" id="description" style="height: 100px" name="description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <label class="col-md-2 col-form-label">Top Up Value</label>
                        <div class="col-md-4 ">
                            <input type="text" name="value" class="form-control">
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-md-4 ml-">
                            <table class="table table-bordered">
                                <thead>
                                    <th>DocNumber</th>
                                    <th>DocName</th>
                                    <th>Document</th>
                                </thead>
                                <tbody>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Data</button>
                </div>
            </form>
        </div>
        </div>
    <!--end of add TopUp Modal -->
</div>
@endsection