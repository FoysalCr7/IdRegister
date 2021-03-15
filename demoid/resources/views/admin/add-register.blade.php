@extends('front-end.master')

@section('title')
    <title>Add Registration</title>
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
                        <ul class="list-styled">
                            <li><a href="{{ route('admin-successlogin') }}">Dashboard</a></li>


                        </ul>
                    <div class="col-md-offset-2 col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><h3 class="panel-title" align="center">Register
                                    Registration </h3></div>
                            <div class="panel-body" style="background: #8c8c8c">
                                <form role="form" method="POST" action="{{ route('insert-register') }}" enctype="multipart/form-data">
                                    @csrf
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Register Name</label>
                                        <input type="text" class="form-control" placeholder="Enter Full Name"
                                               name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Company/Institution Name</label>
                                        <input type="text" class="form-control"
                                               placeholder="Enter Company/Institution Name" name="comapnyname">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Comapny Address</label>
                                        <input type="text" class="form-control" placeholder="Enter Comapny Address"
                                               name="caddress">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Joining Date </label>
                                        <input type="date" name="joindate" min="1990-01-01" max="2030-12-31">
                                    </div>
                                    <div class="form-group">
                                        <img id="image" src="#"/>
                                        <label for="exampleInputEmail1">Register Signature</label>
max (100/100)px
                                        <input type="file" class="form-control" placeholder="Enter Register Signature" name="regsignature"
                                               accept="image/*" required onchange="readURL(this);">
                                    </div>


                                    <button type="reset" class="btn btn-danger waves-effect waves-light"
                                            style="alignment:center">Reset
                                    </button>

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

