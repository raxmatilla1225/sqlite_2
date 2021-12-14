<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <div class="row">

            <div  class="col-md-4">

                <table class="table table-bordered table-striped table-hover table-active border-success" style="margin-bottom: 0">

                <thead>
                        <tr>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Score</th>
                        </tr>
                    </thead>

                    <tbody>


                    @foreach($students as $student)

                            @if($student['bali'] > $g_bali)

                                <tr>
                                    <td>{{$student['name']}}</td>
                                    <td>{{$student['surname']}}</td>
                                    <td>{{$student['bali']}}</td>
                                </tr>
                            @endif

            @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-4">

                <table class="table table-bordered table-striped table-hover table-primary border-success" style="margin-bottom: 0">

                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Score</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($students as $student)

                        @if($student['bali'] > $c_bali && $student['bali'] < $g_bali)

                            <tr>
                                <td>{{$student['name']}}</td>
                                <td>{{$student['surname']}}</td>
                                <td>{{$student['bali']}}</td>
                            </tr>

                        @endif

                    @endforeach
                    </tbody>
                </table>
            </div>

            <div class="col-md-4">

                <table class="table table-bordered table-striped table-hover table-danger border-success" style="margin-bottom: 0">

                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Surname</th>
                        <th>Score</th>
                    </tr>
                    </thead>

                    <tbody>

                    @foreach($students as $student)

                        @if($student['bali'] < $c_bali)

                            <tr>
                                <td>{{$student['name']}}</td>
                                <td>{{$student['surname']}}</td>
                                <td>{{$student['bali']}}</td>
                            </tr>

                        @endif

                    @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</body>
</html>
