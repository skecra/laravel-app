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


<ul>
    <li>Name:{{$contact->first_name." ".$contact->last_name }}</li>
    <li>Email: {{$contact->email}}</li>
    <li>Phone number: {{$contact->phone_number}}</li>
    <li>Address: {{$contact->address}}</li>
</ul>


</body>
</html>
