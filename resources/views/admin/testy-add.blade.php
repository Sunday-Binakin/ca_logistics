@extends('admin.master')

@section('page-style')


@endsection

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Testimonials</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Testomies</li>
            </ol>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <form action="{{url('admin/testy')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="card ">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white"> Testimony</h4>
                </div>
                <div class="card-body">

                    <div class="form-body">
                        <h3 class="box-title">Add A Testimony</h3>
                        <hr class="m-t-0 m-b-5">
                        <div class="row p-t-5">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label"> Name</label>
                                    <input type="text" id="name" required name="name" class="form-control"
                                        placeholder="Name ">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Picture</label>
                                    <input type="file" id="image" name="image" class="form-control"
                                        placeholder="Choose File ">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label"> Company name</label>
                                    <input type="text" id="postion" name="company_name" class="form-control"
                                        placeholder="Company Name ">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label"> Position</label>
                                    <input type="text" id="postion" name="position" class="form-control"
                                        placeholder="Position ">
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Testimony</label>
                                    <textarea type="text" name="testimonial" rows="5" class="form-control"
                                        placeholder="Testimony "></textarea>
                                </div>
                            </div>




                        </div>

                    </div>



                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <button id="save" class="btn btn-info btn-rounded" type="submit">Save</button>
                </div>
            </div>


        </form>
    </div>
</div>

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-body">
                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Company Name</th>
                                <th>Position</th>
                                <th>images</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testies as $c)
                            <tr>
                                <td>{{$c->name}}</td>
                                <td>{{$c->company_name}}</td>
                                <td>{{$c->position}}</td>
                                <td>{{$c->image}}</td>

                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-settings"></i>
                                        </button>
                                        <div class="dropdown-menu animated lightSpeedIn" x-placement="bottom-start"
                                            style="position: absolute; transform: translate3d(69px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a class="dropdown-item"
                                                href="{{url('admin/testy/'.$c->id.'/view')}}">Edit</a>
                                            <a class="dropdown-item"
                                                href="{{url('admin/testy/'.$c->id.'/delete')}}">Delete</a>
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

@section('scripts')



@endsection
