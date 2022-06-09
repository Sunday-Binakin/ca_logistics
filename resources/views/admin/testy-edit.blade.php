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
    <form action="{{url('admin/testy/update')}}" method="POST" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="col-lg-12">
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
                                    <input type="text" id="name" value="{{$testy->name}}" required name="name"
                                        class="form-control" placeholder="Name ">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <img src="{{asset('testies/'.$testy->image)}}">
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Picture</label>
                                    <input type="file" id="image" name="image" class="form-control"
                                        placeholder="Choose File ">
                                </div>
                            </div>
                            <input type="hidden" name="id" value="{{$testy->id}}">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label"> Company Name</label>
                                    <input type="text" id="postion" value="{{$testy->company_name}}" name="company_name"
                                        class="form-control" placeholder="Position ">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label"> Position</label>
                                    <input type="text" id="postion" value="{{$testy->position}}" name="position"
                                        class="form-control" placeholder="Position ">
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Testimony</label>
                                    <textarea type="text" name="testimonial" rows="5" class="form-control"
                                        placeholder="Testimony ">{{$testy->testimonial}}</textarea>
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

        </div>
    </form>
</div>





@endsection

@section('scripts')



@endsection
