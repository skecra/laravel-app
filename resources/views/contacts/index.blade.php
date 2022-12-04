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

{{--<ul>--}}
{{--    @foreach($contacts as $c)--}}
{{--        <a href="/contacts/{{$c->id}}"> <li>{{$c->first_name." ".$c->last_name}}</li> </a>--}}
{{--    @endforeach--}}
{{--</ul>--}}

<table border="1">
    <thead>

    <th>Ime</th>
    <th>Detalji</th>
    <th>Edit</th>
    <th>Brisanje</th>
    </thead>
    <tbody>
    @foreach($contacts as $c)
        <tr>
        <td>{{$c->first_name." ".$c->last_name}}</td>
        <td><a href="/contacts/{{$c->id}}">Detalji</a></td>
        <td><a href="/contacts/{{$c->id}}/edit">Edit</a></td>
        <td>
            <form method="post" action="contacts/{{$c->id}}">
                @csrf
                @method('delete')
                <button>x</button>
            </form> </td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="/contacts/create">dodaj novog</a>

</body>
</html>
