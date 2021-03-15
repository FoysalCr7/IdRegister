@extends('front-end.master')
@section('title')
    <title>Id Edit</title>
@endsection

@section('body')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->


                <!-- Start Widget -->
                <div class="row">
                    @if (session('message'))
                        <div class="alert alert-success" align="center">
                            {{ session('message') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="col-md-offset-2 col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title" align="center">Id Information
                                    Update </h3></div>
                            <div class="panel-body">
                                <form role="form" method="POST" action="{{ route('update-card') }}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Full Name"
                                               name="name" value="{{ $idcard->name }}">
                                        <input type="hidden" name="id" value="{{ $idcard->id }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Id No</label>
                                        <input type="text" class="form-control" placeholder="Enter Id No"
                                               name="idnumber" value="{{ $idcard->idnumber }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" placeholder="Enter email" name="email"
                                               value="{{ $idcard->email }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone </label>
                                        <input type="number" class="form-control" placeholder="Enter Phone No."
                                               name="phone" value="{{ $idcard->phone }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Designation</label>
                                        <input type="text" class="form-control" placeholder="Enter Designation"
                                               name="designation" value="{{ $idcard->designation }}">
                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Blood Group</label>
                                        <input type="text" class="form-control" placeholder="Enter Blood Group"
                                               name="blood" value="{{ $idcard->blood }}">

                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Photo</label>
                                        <img src="{{ asset($idcard->image) }}" height="100px" width="100">

                                    </div>


                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Signature</label>
                                        <img src="{{ asset($idcard->signature) }}" alt="" height="100px" width="100px"
                                             name="old_image">
                                    </div>

                                    <button type="submit" class="btn btn-success waves-effect waves-light"
                                            style="alignment:center">Submit
                                    </button>
                                </form>
                            </div><!-- panel-body -->
                        </div> <!-- panel -->
                    </div>

                </div> <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->


    </div>

    <div id="preview"></div>

    <script type="text/javascript">


        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#signature')
                        .attr('src', e.target.result)
                        .width(100)
                        .height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection

