@extends('admin.master')

@section('page-style')


@endsection

@section('content')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Products</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Prodcuts</li>
                </ol>
            </div>
        </div>
    </div>


    <div class="row">
        <form action="{{url('admin/product')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white"> Product</h4>
                    </div>
                    <div class="card-body">

                        <div class="form-body">
                            <h3 class="box-title">Add Product</h3>
                            <hr class="m-t-0 m-b-5">
                            <div class="row p-t-5">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"> Name</label>
                                        <input type="text" id="name" required name="name" class="form-control" placeholder="Enter  Title ">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"> Product Category</label>
                                        <select class="form-control" required name="category_id" >
                                            <option></option>
                                            @foreach($cats as $c)
                                        <option value="{{$c->id}}">{{$c->category_name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Cover image(370 * 250 px)</label>
                                        <input type="file" id="image" required name="image" class="form-control" placeholder="Choose File ">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Description</label>
                                        <textarea type="text"  name="des" rows="5" class="form-control" placeholder=" summary "></textarea>
                                    </div>
                                </div>




                            </div>

                        </div>



                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <button id="save" class="btn btn-info btn-rounded"  type="submit">Save</button>
                    </div>
                </div>

            </div>
        </form>
    </div>





    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Products</h4>

                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $s)
                                <tr>
                                    <td>{{$s->name}}</td>
                                    <td>
                                       @isset($s->cat->category_name)
                                            {{$s->cat->category_name}}
                                       @endisset
                                       
                                    </td>

                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-settings"></i>
                                            </button>
                                            <div class="dropdown-menu animated lightSpeedIn" x-placement="bottom-start" style="position: absolute; transform: translate3d(69px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="dropdown-item" href="{{url('admin/product/'.$s->id.'/edit')}}">Edit</a>
                                                <a class="dropdown-item" href="{{url('admin/product/'.$s->id.'/delete')}}">Delete</a>

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

    <script>
        //                alert('hi');
        CKEDITOR.replace( 'des' );
        CKEDITOR.replace( 'body' );
        //        CKEDITOR.replace( 'vision' );
        //        CKEDITOR.replace( 'about' );

    </script>


@endsection

