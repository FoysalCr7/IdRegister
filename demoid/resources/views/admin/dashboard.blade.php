@extends('admin.master')
@section('title')
  <title>Dashboard</title>
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

                            <li class="has_sub">
                                <i class="fa fa-users" aria-hidden="true"></i><span> Register </span><span class="pull-right"><i class="md md-add"></i></span></a>
                                <ul class="list-styled">
                                    <li><a href="{{ route('add-register') }}">Add Register</a></li>
                                    <li><a href="{{ route('all-register') }}">All Register</a></li>
                                    <li><a href="{{ route('approved-id') }}">All Approved Id</a></li>

                                </ul>
                            </li>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Id Submission View </h3>
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
                                                            <th>Name</th>
                                                            <th>Id Number</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Designation</th>
                                                            <th>Blood Group</th>
                                                            <th>Photo</th>
                                                            <th>Signature</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        </thead>


                                                        <tbody>
                                                        @foreach($idcard as $idcard)
                                                            <tr>
                                                                <td>{{ $idcard->id }}</td>
                                                                <td>{{ $idcard->name }}</td>
                                                                <td>{{ $idcard->idnumber }}</td>
                                                                <td>{{ $idcard->email }}</td>
                                                                <td>{{ $idcard->phone }}</td>
                                                                <td>{{ $idcard->designation }}</td>
                                                                <td>{{ $idcard->blood }}</td>
                                                                <td>
                                                                    <img src="{{ asset($idcard->image) }}" alt=""
                                                                         height="60px" width="60px">
                                                                </td>
                                                                <td>
                                                                    <img src="{{ asset($idcard->signature) }}" alt=""
                                                                         height="60px" width="60px">
                                                                </td>

                                                                <td>
                                                                    <a href="{{ route('edit-idcard',$idcard->id) }}"
                                                                       class="btn btn-warning">Edit</a>
                                                                    <a href="{{ route('delete-idcard',$idcard->id) }}"
                                                                       class="btn btn-danger"
                                                                       onclick="return confirm('Are you sure?')">Delete</a>

                                                                    <form action="{{ route('approval') }}" method="POST">
                                                                        {{csrf_field()}}
                                                                        <input type="checkbox"  {{ $idcard->approve == 1  ? 'checked':'' }} value="1" name="approve">
                                                                        <input type="hidden" name="id" value="{{ $idcard->id }}">
                                                                        <input type="submit" class="btn btn-success" value="Approve">
                                                                    </form>



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



