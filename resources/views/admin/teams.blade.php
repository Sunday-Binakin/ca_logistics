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
    <form action="{{route('add-team')}}" method="post" enctype="multipart/form-data">
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
                                        <input type="text" name="name" class="form-control" required>
                                    </div>
                                </div>


                            </div>
                            <div class="row p-t-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Position</label>
                                        <input type="text" name="position" class="form-control" required>
                                    </div>
                                </div>


                            </div>

                            <div class="row p-t-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Image(350 * 263 px)</label>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                </div>


                            </div>

                            <div class="row p-t-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">LinkedIn</label>
                                        <input type="text" name="linkedin" class="form-control">
                                    </div>
                                </div>


                            </div>
                            <div class="row p-t-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Facebook</label>
                                        <input type="text" name="facebook" class="form-control">
                                    </div>
                                </div>


                            </div>

                            <div class="row p-t-5">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">About Team Member</label>
                                        <textarea type="text" name="about" rows="5" class="form-control"
                                            placeholder="About Team Member "></textarea>
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
                                <th>Name</th>
                                <th>Position</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teams as $t)
                            <tr>
                                <td>{{$t->name}}</td>
                                <td>{{$t->position}}</td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-info dropdown-toggle"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ti-settings"></i>
                                        </button>
                                        <div class="dropdown-menu animated lightSpeedIn" x-placement="bottom-start"
                                            style="position: absolute; transform: translate3d(69px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                            <a class="dropdown-item"
                                                href="{{url('admin/team/edit/'.$t->id)}}">Edit</a>
                                            <a class="dropdown-item"
                                                href="{{url('admin/team/delete/'.$t->id)}}">Delete</a>
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
    CKEDITOR.replace( 'about' );



</script>


@endsection
