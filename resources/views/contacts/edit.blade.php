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

<form action="/contacts/{{request('id')}}" method="post">

    @csrf
    @method('PUT')
    <input type="text" placeholder="unesite ime..." name="first_name" value="{{$contact->first_name}}">
    <input type="text" placeholder="unesite prezime..." name="last_name" value="{{$contact->last_name}}">
    <input type="text" placeholder="unesite email..." name="email" value="{{$contact->email}}">
    <input type="text" placeholder="unesite br tel..." name="phone_number" value="{{$contact->phone_number}}">
    <input type="text" placeholder="unesite adresu..." name="address" value="{{$contact->address}}">
    <button>save</button>

</form>


</body>
</html>
