@extends('admin.master')
@section('content')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">VAP</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Team Member</li>
            </ol>
        </div>
    </div>
</div>
<div>
    <form action="{{route('team-update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">

            <div class="col-12">


                <div class="card ">
                    <div class="card-header bg-info">
                        <h4 class="m-b-0 text-white">Add Team member</h4>
                    </div>
                    <div class="card-body">

                        <div class="form-body">

                            <div class="row p-t-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <input type="text" name="name" value="{{$team->name}}" class="form-control"
                                            required>
                                    </div>
                                </div>


                            </div>
                            <div class="row p-t-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Position</label>
                                        <input type="text" name="position" value="{{$team->position}}"
                                            class="form-control" required>
                                    </div>
                                </div>


                            </div>

                            <div class="col-md-12">
                                <img src="{{asset('/team/'.$team->image)}}" style=" border: 1px solid #ddd;
                                border-radius: 4px;
                                padding: 5px;" width="550" height="450">
                            </div>

                            <div class="row p-t-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Image(1600 * 550 px)</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>


                            </div>

                            <div class="row p-t-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">LinkedIn</label>
                                        <input type="text" value="{{$team->linkedin}}" name="linkedin"
                                            class="form-control">
                                    </div>
                                </div>


                            </div>
                            <div class="row p-t-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Facebook</label>
                                        <input type="text" name="facebook" value="{{$team->facebook}}"
                                            class="form-control">
                                    </div>
                                </div>


                            </div>

                            <div class="row p-t-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">About Team Member</label>
                                        <textarea type="text" name="about" rows="5" class="form-control"
                                            placeholder="About Team Member ">{{$team->about}}</textarea>
                                    </div>
                                </div>


                            </div>
                        <input type="hidden" value="{{$team->id}}" name="id">

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

@endsection

@section('scripts')

<script>
    CKEDITOR.replace( 'about' );
</script>


@endsection
