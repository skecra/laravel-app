<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test view</title>
</head>
<body>
<h2>test page</h2>

<p>Welcome {{$name1}}</p>


@if($list=='false')
    <table border="1">
        <thead>
        <th>Rbr</th>
        <th>Ime</th>
        </thead>
        <tbody>
        @foreach($users as $key=>$user)
            <tr>
            <td>{{$key++}}</td>
            <td>{{$user}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@else
    <ul>
        @foreach($users as $user)
            <li>{{$user}}</li>
        @endforeach
    </ul>
@endif


</body>
</html>
