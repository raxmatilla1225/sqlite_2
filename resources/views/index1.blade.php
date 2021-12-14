<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form class="w-50 my-5" method="post" action="{{route('student.form')}}">

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
