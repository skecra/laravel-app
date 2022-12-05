@extends('layouts.main')

@section('content')



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




@endsection
