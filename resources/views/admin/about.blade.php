@extends('admin.master')
@section('content')

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">UPPR</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">UPPR</li>
                </ol>
            </div>
        </div>
    </div>
    <div>
        <form action="{{route('about-update')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">

                <div class="col-12">


                    <div class="card ">
                        <div class="card-header bg-info">
                            <h4 class="m-b-0 text-white">News</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-body">
                                <h3 class="box-title">Add About</h3>
                                <hr class="m-t-0 m-b-5">
                                <div class="row p-t-5">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Summary</label>
                                            <textarea rows="8"  name="summary" class="form-control" required>
                                                      {{ $about->summary }}
                                        </textarea>
                                        </div>
                                    </div>


                                </div>

                            </div>


                        </div>
                    </div>

                    <input type="hidden" name="id" value="{{ $about->id }}">

                    <div class="card">
                        <div class="card-body">

                            <div class="form-body">
                                <div class="row p-t-5">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Mission</label>
                                            <textarea class="form-control" rows="8" name="mission" required>
                                                   {{ $about->mission }}
                                               </textarea>
                                        </div>
                                    </div>


                                </div>

                            </div>


                        </div>

                    </div>

                    <div class="card">
                        <div class="card-body">

                            <div class="form-body">
                                <div class="row p-t-5">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Vision</label>
                                            <textarea class="form-control" rows="8" name="vision" required>
                                              {{ $about->vision }}
                                            </textarea>
                                        </div>
                                    </div>


                                </div>

                            </div>


                        </div>

                    </div>
                    <div class="card">
                        <div class="card-body">

                            <div class="form-body">
                                <div class="row p-t-5">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Core values</label>
                                            <textarea class="form-control" rows="8" name="values" required>
                                              {{ $about->values }}
                                            </textarea>
                                        </div>
                                    </div>


                                </div>

                            </div>


                        </div>

                    </div>

                    <div class="card">
                        <div class="card">
                            <div class="card-body">

                                <div class="form-body">
                                    <div class="row p-t-5">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="control-label">About</label>
                                                <textarea class="form-control" rows="15" name="about" required>
                                                    {{ $about->about }}
                                                </textarea>
                                            </div>
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
                    <button type="submit" id="save" class="btn btn-info btn-rounded">Update</button>
                </div>
            </div>

        </form>

    </div>



@endsection

@section('scripts')

    <script>
        //        alert('hi');
        CKEDITOR.replace( 'summary' );
        CKEDITOR.replace( 'mission' );
        CKEDITOR.replace( 'vision' );
        CKEDITOR.replace( 'about' );
        CKEDITOR.replace( 'values' );

    </script>


@endsection
