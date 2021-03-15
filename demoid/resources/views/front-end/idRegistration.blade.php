@extends('front-end.master')

@section('title')
    <title>Id Registration</title>
@endsection

@section('body')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->


                <!-- Start Widget -->
                <div class="row"  >
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
                    <div class="col-md-offset-2 col-md-6" style="background: #1b6d85 ">
                        <div class="panel panel-default" style="background: #2e6da4">
                            <div class="panel-heading"><h3 class="panel-title" align="center" >Id Registration Submission</h3></div>
                            <div class="panel-body" style="background: #2e6da4"  >
                                <form role="form" method="POST" action="{{ route('insert') }}" enctype="multipart/form-data">
                                    @csrf
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control"  placeholder="Enter Full Name" name="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Id No</label>
                                        <input type="text" class="form-control"  placeholder="Enter Id No" name="idnumber">
                                        <input type="hidden" name="approve">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control"  placeholder="Enter email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Phone </label>
                                        <input type="number" class="form-control"  placeholder="Enter Phone No." name="phone">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Designation</label>
                                        <input type="text" class="form-control"  placeholder="Enter Designation" name="designation">
                                    </div>


                                    <div class="form-group" >
                                        <label for="exampleInputEmail1">Blood Group</label>
                                        <input type="text" class="form-control"  placeholder="Enter Blood Group" name="blood">

                                    </div>


                                    <div class="form-group">
                                        <img id="image" src="#" />
                                        <label for="exampleInputEmail1">Photo</label>

                                        <input type="file" class="form-control"  placeholder="Enter Photo" name="image"  accept="image/*"  required onchange="readURL(this);">
                                    </div>

                                    <div class="form-group">
                                        <img id="image" src="#" />
                                        <label for="exampleInputEmail1">Signature</label>

                                        <input type="file" class="form-control"  placeholder="Enter Signature" name="signature"  accept="image/*"  required onchange="readURL(this);">
                                    </div>

                                    <button type="reset" class="btn btn-danger waves-effect waves-light" style="alignment:center">Reset</button>


                                    <button type="submit" class="btn btn-success waves-effect waves-light" style="alignment:center">Submit</button>
                                </form>
                            </div><!-- panel-body -->
                        </div> <!-- panel -->
                    </div>

                </div> <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->



    </div>

    <div id="preview"> </div>

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
