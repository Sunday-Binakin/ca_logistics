@extends('admin.master')

@section('page-style')


@endsection

@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Gallery</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">Home</a>
                </li>
                <li class="breadcrumb-item active">Gallery</li>
            </ol>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-12">
        <form action="{{url('admin/gallery')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}

            <div class="card ">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white"> Gallery</h4>
                </div>
                <div class="card-body">

                    <div class="form-body">
                        <h3 class="box-title">Add Image</h3>
                        <hr class="m-t-0 m-b-5">
                        <div class="row p-t-5">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label"> Image</label>
                                    <input type="file" required name="image" required class="form-control"
                                        placeholder="Category Name ">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label"> Image Description</label>
                                    <input type="text" name="description" class="form-control"
                                        placeholder="Image Description ">
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
    @foreach ($images as $i)
    <div class="col-lg-3">

        <img height="270" width="300" style=" border: 1px solid #ddd;
                                border-radius: 4px;
                                padding: 5px;" src="{{asset('gallery/'.$i->name)}}"><br>
        <a href="{{url('admin/gallery/'.$i->name.'/delete')}}"><button style="margin-top: 10px; margin-bottom: 10px"
                type="button" class="btn btn-danger shadow ">Delete</button></a>
    </div>
    @endforeach
</div>

@endsection
