@extends('admin.master')
@section('content')

    <div class="row">
        <div class="col-lg-12">
            <div class="card ">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Product Request</h4>
                </div>
                <div class="card-body">

                    <div class="form-body">
                        <h3 class="box-title"> View</h3>
                        <hr class="m-t-0 m-b-5">
                        <div class="row p-t-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> Name</label>
                                    <input type="text" id="name" disabled value="{{ $message->name }}" class="form-control" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> Phone</label>
                                    <input type="text" disabled   value="{{ $message->phone }}"class="form-control" >
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> Email</label>
                                    <input type="text" disabled   value="{{ $message->email }}"class="form-control" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label"> Subject</label>
                                    <input type="text" disabled   value="{{ $message->subject }}"class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label"> Message</label>
                                    <textarea name="message" disabled  class="form-control" >{{ $message->message }}</textarea>
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
    <script>
        CKEDITOR.replace( 'message' );
    </script>




@endsection