<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
        .box{

            background: #1b6d85;
            width:500px;
            margin:0 auto;
            border:1px solid #ccc;
            margin-top:120px;
            box-shadow: 10px 15px #a0a0a0;
            border: 3px #1b6d85;
            padding: 10px;
            border-bottom-right-radius: 25px;
            border-bottom-left-radius: 25px;
        }
    </style>
</head>
@section('title')
    <title>Admin Login</title>
@endsection
<body>
<br />
<div class="container box" style="background: #2e6da4">
    <h3 align="center">Admin Login</h3><br />

    @if(isset(Auth::user()->email))
        <script>window.location="/dashboard";</script>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="{{ route('admin-checklogin') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Enter Email</label>
            <input type="email" name="email" class="form-control" />
        </div>
        <div class="form-group">
            <label>Enter Password</label>
            <input type="password" name="password" class="form-control" />
        </div>
        <div class="form-group">
            <input type="submit" name="login" class="btn btn-primary" value="Login" />
        </div>
    </form>
</div>
</body>
</html>
