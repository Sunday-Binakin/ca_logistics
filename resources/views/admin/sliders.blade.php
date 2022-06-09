@extends('admin.master')
@section('content')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">JAPP</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Home Sliders</li>
                </ol>
            </div>
        </div>
    </div>
    <div>
        <form action="{{route('slider-add')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">

                <div class="col-12">


                    <div class="card ">
                        <div class="card-header bg-info">
                            <h4 class="m-b-0 text-white">Upload slider</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-body">

                                <div class="row p-t-5">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Image Tag</label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                    </div>


                                </div>

                                <div class="row p-t-5">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Image(1600 * 550 px)</label>
                                            <input type="file" name="image" class="form-control" required>
                                        </div>
                                    </div>


                                </div>

                            </div>


                        </div>
                    </div>

                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <button type="submit" id="save" class="btn btn-info btn-rounded">Upload</button>
                </div>
            </div>

        </form>

    </div>

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sliders</h4>

                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>ULR</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $s)
                                <tr>
                                    <td>{{$s->slug}}</td>
                                    <td>{{$s->url}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-settings"></i>
                                            </button>
                                            <div class="dropdown-menu animated lightSpeedIn" x-placement="bottom-start" style="position: absolute; transform: translate3d(69px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="dropdown-item" href="{{url('admin/sliders/delete/'.$s->id)}}">Delete</a>
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
