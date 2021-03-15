<!DOCTYPE html>
<html>
<head>
    <title>Full Id Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="{{ asset('/') }}ss.css" rel="stylesheet"/>
</head>
<body>

<div class="row">
    <div class="column">
        <div class="card">

            @foreach($idcard as $idcard)


                <div class="card " style="width: 28rem;">
                    <div class="card-header">
                         {{ $idcard->name }}
                    </div>
                    <table class="card-table table">

                        <tbody>
                        <tr>
                            <td rowspan="2"><img src="{{ asset($idcard->image) }}" alt=""
                                                 height="70px" width="70px"></td>
                            <td>ID:{{ $idcard->idnumber  }}</td>
                        </tr>
                        <tr>

                            <td class="not-first-cell">Email: {{ $idcard->email  }}</td>
                        </tr>
                        <tr>
                            <td class="not-first-cell">Blood Group: {{ $idcard->blood  }}</td>
                            <td class="not-first-cell">Designation: {{ $idcard->designation  }}</td>
                        </tr>
                        <tr>
                            <td class="not-first-cell"><img src="{{ asset($idcard->signature) }}" alt=""
                                                            height="40px" width="50px"></td></td>
                            <td class="not-first-cell">Phone No: {{ $idcard->phone  }}</td>

                        </tr>

                        </tbody>
                    </table>
                </div>
            @endforeach

        </div>
    </div>
    <div class="column">
        <div class="card">
            @foreach($register as $register)
                <div class="card " style="width: 28rem;">
                    <div class="card-header">
                        Last Page of Id Card
                    </div>
                    <table class="card-table table">

                        <tbody>
                        <tr>
                            <td >Company Name: {{ $register->comapnyname }}</td>

                        </tr>
                        <tr>
                            <td class="not-first-cell">Comapny Address: {{ $register->caddress }}</td>

                        </tr>
                        <tr>
                            <td  class="not-first-cell"> Joining Date: {{ $register->joindate }}</td>

                        </tr>
                        <tr>
                            <td class="not-first-cell"><img src="{{ asset($register->regsignature) }}" alt=""
                                                            height="60px" width="60px"></td>

                        </tr>

                        </tbody>
                    </table>
                </div>

            @endforeach
        </div>
    </div>

</div>






<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"
        integrity="sha384-LtrjvnR4Twt/qOuYxE721u19sVFLVSA4hf/rRt6PrZTmiPltdZcI7q7PXQBYTKyf"
        crossorigin="anonymous"></script>
</body>
</html>
