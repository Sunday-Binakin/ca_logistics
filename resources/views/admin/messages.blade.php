@extends('admin.master')

@section('page-style')


@endsection

@section('content')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Courses</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Messages</li>
                </ol>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Messages</h4>

                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Subject</th>
                                <th>email</th>
                                <th>Phone</th>
                                <th>Status</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($messages as $c)
                                <tr>
                                    <td>{{$c->name}}</td>
                                    <td>{{$c->subject}}</td>
                                    <td>{{$c->email}}</td>
                                    <td>{{$c->phone}}</td>
                                <td>{{$c->status}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-settings"></i>
                                            </button>
                                            <div class="dropdown-menu animated lightSpeedIn" x-placement="bottom-start" style="position: absolute; transform: translate3d(69px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="dropdown-item" href="{{url('admin/message/'.$c->id.'/view')}}">View  Message</a>
                                                <a class="dropdown-item" href="{{url('admin/message/'.$c->id.'/attend')}}">Atteded to</a>
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

