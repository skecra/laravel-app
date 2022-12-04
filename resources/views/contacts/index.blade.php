@extends('layouts.main')

@section('content')


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
                <td><a href="{{ route('contacts.show', ['contact'=>$c->id]) }}">Detalji</a></td>
                <td><a href="{{ route('contacts.edit', ['contact'=>$c->id]) }}">Edit</a></td>
                <td>
                    <form method="post" action="{{ route('contacts.destroy', ['contact'=>$c->id]) }}">
                        @csrf
                        @method('delete')
                        <button>x</button>
                    </form> </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="/contacts/create">dodaj novog</a>


@endsection
