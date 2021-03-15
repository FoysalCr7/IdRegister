@extends('admin.master')
@section('title')
    <title>All Register</title>
@endsection

@section('body')
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <!-- Start Widget -->
                <div class="row">
                    @if (session('message'))
                        <div class="alert alert-success" align="center">
                            {{ session('message') }}
                        </div>
                @endif
                <!-- Start content -->
                    <div class="content">
                        <div class="container">

                            <!-- Page-Title -->


                                <ul class="list-styled">
                                    <li><a href="{{ route('admin-successlogin') }}">Dashboard</a></li>


                                </ul>

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Register View </h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                    <table id="datatable"
                                                           class="col-xs-pull-2 table table-striped table-bordered"
                                                           cellpadding="5px">
                                                        <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Register Name</th>
                                                            <th>Company/Institution Name</th>
                                                            <th>Comapny Address</th>
                                                            <th>Joining Date</th>
                                                            <th>Register Signature</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>


                                                        <tbody>
                                                        @foreach($register as $register)
                                                            <tr>
                                                                <td>{{ $register->id }}</td>
                                                                <td>{{ $register->name }}</td>
                                                                <td>{{ $register->comapnyname }}</td>
                                                                <td>{{ $register->caddress }}</td>
                                                                <td>{{ $register->joindate }}</td>
                                                                <td>
                                                                    <img src="{{ asset($register->regsignature) }}" alt=""
                                                                         height="100px" width="100px">
                                                                </td>


                                                                <td>
                                                                    <a href="{{ route('edit-register',$register->id) }}"
                                                                       class="btn btn-warning">Edit</a>
                                                                    <a href="{{ route('delete-register',$register->id) }}"
                                                                       class="btn btn-danger"
                                                                       onclick="return confirm('Are you sure?')">Delete</a>


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

                            </div> <!-- End Row -->


                        </div> <!-- container -->

                    </div> <!-- content -->


                </div>


            </div> <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->



    </div>

@endsection




