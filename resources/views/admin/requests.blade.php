@extends('admin.master')

@section('page-style')


@endsection

@section('content')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Repair Requests</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Repair Requests</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Repair Requests</h4>

                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Location</th>
                                <th>Vehicle Type / MOdel</th>
                                <th>Service Type</th>
                                <th>Date Requested</th>
                                <th>Status</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($repair as $c)
                                <tr>
                                    <td>{{$c->name}}</td>
                                    <td>{{$c->phone}}</td>
                                    <td>{{$c->location}}</td>
                                    <td>{{$c->vehicle}}</td>
                                    <td>{{$c->service}}</td>
                                    <td>{{$c->created_at}}</td>
                                    <td>{{$c->status}}</td>


                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-settings"></i>
                                            </button>
                                            <div class="dropdown-menu animated lightSpeedIn" x-placement="bottom-start" style="position: absolute; transform: translate3d(69px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="dropdown-item" href="{{url('admin/repair/'.$c->id.'/view')}}">View</a>
                                                <a class="dropdown-item" href="{{url('admin/repair/'.$c->id)}}">Mark as Repaired</a>
                                                {{--<a class="dropdown-item" href="{{url('admin/message/'.$c->id.'/delete')}}">Delete</a>--}}
                                            </div>

                                        </div>
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

@endsection

@section('page-style')


@endsection

