@extends('admin.master')
@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card ">
            <div class="card-header bg-info">
                <h4 class="m-b-0 text-white">Repair Request</h4>
            </div>
            <div class="card-body">

                <div class="form-body">
                    <h3 class="box-title"> View</h3>
                    <hr class="m-t-0 m-b-5">
                    <div class="row p-t-5">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label"> Name</label>
                                <input type="text" id="name" disabled value="{{ $repair->name }}" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label"> Phone</label>
                                <input type="text" disabled value="{{ $repair->phone }}" class="form-control">
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label"> Location</label>
                                <input type="text" disabled value="{{ $repair->location }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label"> Vehicle Type / Model</label>
                                <input type="text" disabled value="{{ $repair->vehicle }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label"> Service Type</label>
                                <input type="text" disabled value="{{ $repair->service }}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="control-label"> Status</label>
                                <input type="text" disabled value="{{ $repair->status }}" class="form-control">
                            </div>
                        </div>

                    </div>

                </div>



            </div>
        </div>



    </div>
</div>
</div>
{{--</form>--}}
@endsection

@section('scripts')



@endsection
