<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    <div>
        <a href="{{route('student.form')}}" class="btn btn-primary float-right my-5">add user</a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Address</th>
            <th>Actions</th>
        </tr>



    @foreach(\App\Models\Student::all() as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item['name']}}</td>
            <td>{{$item['surname']}}</td>
            <td>{{$item->address}}</td>
            <td>
                <a href="#" class="btn btn-success">Edit</a>
                <a href="#" class="btn btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach

    </table>

</div>

</body>
</html>
