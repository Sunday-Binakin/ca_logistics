@extends('admin.master')

@section('page-style')


@endsection

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Product Categories</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Product Categories</li>
            </ol>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <form action="{{url('admin/category')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="card ">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white"> Product Categories</h4>
                </div>
                <div class="card-body">

                    <div class="form-body">
                        <h3 class="box-title">Add A Category</h3>
                        <hr class="m-t-0 m-b-5">
                        <div class="row p-t-5">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label"> Category Name</label>
                                    <input type="text" required name="category_name" class="form-control"
                                        placeholder="Category Name ">
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
                <h4 class="card-title">Product Categories</h4>

                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cats as $s)
                            <tr>
                                <td>{{$s->category_name}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-settings"></i>
                                        </button>
                                        <div class="dropdown-menu animated lightSpeedIn" x-placement="bottom-start"
                                            style="position: absolute; transform: translate3d(69px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            {{--  <a class="dropdown-item" href="#">Delete</a>  --}}
                                            <a class="dropdown-item"
                                                href="{{url('admin/category/'.$s->id.'/delete')}}">Delete</a>


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
