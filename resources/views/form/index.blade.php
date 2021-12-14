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
<body class="d-flex justify-content-center">

<form class="w-50 my-5" method="post" action="{{route('student.store')}}">

    @csrf
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <label for="">Surname</label>
        <input type="text" class="form-control" name="surname">
    </div>

    <div class="form-group">
        <label for="">Address</label>
        <input type="text" class="form-control" name="address">
    </div>

    <input type="submit" value="Send" class="btn btn-primary">

</form>

</body>
</html>
