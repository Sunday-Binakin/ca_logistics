@extends('admin.master')
@section('content')
    <form action="{{route('blog-update')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card ">
                    <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white">Story</h4>
                    </div>
                    <div class="card-body">

                        <div class="form-body">
                            <h3 class="box-title">Edit Story</h3>
                            <hr class="m-t-0 m-b-5">
                            <div class="row p-t-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label"> Title</label>
                                        <input type="text" id="name" required name="title" value="{!! $blog->title !!}" class="form-control" placeholder="Enter News Title ">
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label"> Story By</label>
                                        <input type="text" id="name" required name="story_by"   value="{!! $blog->by !!}"class="form-control" placeholder="News By ">
                                    </div>
                                </div>


                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">summary</label>
                                        <textarea type="text"  name="summary" rows="5"   class="form-control" placeholder="Enter summary "> {!! $blog->summary !!}</textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <img src="{{asset('/blogs/'.$blog->image)}}" width="550" height="450">
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Cover image</label>
                                        <input type="file" id="image"  name="image" class="form-control" placeholder="Choose File ">
                                    </div>
                                </div>


                            </div>

                        </div>



                    </div>
                </div>
                <input type="hidden" value="{{$blog->id}}" name="id">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <textarea name="body" class="summernote">
                               {!! $blog->body !!}
                            </textarea>
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
        </div>
        </div>
    </form>
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