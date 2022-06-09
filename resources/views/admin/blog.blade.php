@extends('admin.master')

@section('page-style')


@endsection

@section('content')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Blog</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Blog</li>
                </ol>
            </div>
        </div>
    </div>


    <div class="row">
        <form action="{{url('admin/blog')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white"> Blog</h4>
                    </div>
                    <div class="card-body">

                        <div class="form-body">
                            <h3 class="box-title">Add A Story</h3>
                            <hr class="m-t-0 m-b-5">
                            <div class="row p-t-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label"> Title</label>
                                        <input type="text" id="name" required name="title" class="form-control" placeholder="Enter Story Title ">
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
                                        <label class="control-label"> Story By</label>
                                        <input type="text" id="name" required name="story_by" class="form-control" placeholder="Story By ">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">summary</label>
                                        <textarea type="text"  name="summary" rows="5" class="form-control" placeholder="Story summary "></textarea>
                                    </div>
                                </div>




                            </div>

                        </div>



                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-group">
                                    <label class="control-label">Story Body</label>
                                    <textarea name="body" >

                                      </textarea>
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

            </div></form>
    </div>



    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Blogs</h4>

                    <div class="table-responsive m-t-40">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Title</th>
                                {{--<th>Summary</th>--}}
                                <th>Date Created</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($blogs as $s)
                                <tr>
                                    <td>{{$s->title}}</td>
                                    {{--<td>{{$s->summary}}</td>--}}
                                    <td>{{$s->created_at}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="ti-settings"></i>
                                            </button>
                                            <div class="dropdown-menu animated lightSpeedIn" x-placement="bottom-start" style="position: absolute; transform: translate3d(69px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                <a class="dropdown-item" href="{{url('admin/blog/'.$s->id.'/edit')}}">Edit</a>
                                                <a class="dropdown-item" href="{{url('admin/blog/'.$s->id.'/delete')}}">Delete</a>

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
        CKEDITOR.replace( 'summary' );
        CKEDITOR.replace( 'body' );
        //        CKEDITOR.replace( 'vision' );
        //        CKEDITOR.replace( 'about' );

    </script>


@endsection

