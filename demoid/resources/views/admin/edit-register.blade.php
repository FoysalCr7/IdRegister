@extends('front-end.master')
@section('title')
    <title>Edit Register</title>
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
                            <div class="panel-heading"><h3 class="panel-title" align="center">Register
                                    Registration </h3></div>
                            <div class="panel-body">
                                <form role="form" method="POST" action="{{ route('update-register') }}" enctype="multipart/form-data">
                                    @csrf
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Register Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Full Name"
                                               name="name" value="{{ $register->name }}">
                                        <input type="hidden" name="id" value="{{ $register->id }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Company/Institution Name</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Company/Institution Name" name="comapnyname" value="{{ $register->comapnyname }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Comapny Address</label>
                                        <input type="text" class="form-control" placeholder="Enter Comapny Address"
                                               name="caddress" value="{{ $register->caddress }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Joining Date </label>
                                        <input type="date" name="joindate" min="1990-01-01" max="2030-12-31" value="{{ $register->joindate }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Register Signature</label>

                                        <img id="image" src="{{ $register->regsignature }}" width="70px" height="70px"/>
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

    </script>

@endsection

