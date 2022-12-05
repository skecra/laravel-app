@extends('layouts.main')

@section('content')





<div class="row">
    <div class="col-2 offset-10 float-rigth my-4">
        <form action="{{route('contacts.index')}}" method="GET" class="">
            <input type="text" name="searchTerm" value="{{request('searchTerm')}}" id="">
        </form>
    </div>

    <div class="col-10 offset-2">
        <table class="table table-striped">
            <thead>

            <th>Ime</th>
            <th>Email</th>
            <th>Broj telefona</th>
            <th>Detalji</th>
            <th>Edit</th>
            <th>Brisanje</th>
            </thead>
            <tbody>
            @foreach($contacts as $c)
                <tr>
                    <td>{{$c->first_name." ".$c->last_name}}</td>
                    <td>{{$c->email}}</td>
                    <td>{{$c->phone_number}}</td>
                    <td><a class="btn btn-primary" href="{{ route('contacts.show', ['contact'=>$c->id]) }}">Detalji</a></td>
                    <td><a class="btn btn-warning" href="{{ route('contacts.edit', ['contact'=>$c->id]) }}">Edit</a></td>
                    <td>
                        <form method="post" action="{{ route('contacts.destroy', ['contact'=>$c->id]) }}">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">Delete</button>
                        </form> </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div>
            {{$contacts->onEachSide(2)->links()}}
        </div>

        <a href="/contacts/create">dodaj novog</a>


    </div>
</div>

@endsection
