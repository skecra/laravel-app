@extends('layouts.main')

@section('content')


    <form action="{{ route('contacts.update', ['contact'=>$contact->id]) }}" method="post">
        @csrf
        @method('PUT')
        <input type="text" placeholder="unesite ime..." name="first_name" value="{{old('first_name', $contact->first_name)}}">
        @error('first_name')
        <p>{{$message}}</p>
        @enderror
        <input type="text" placeholder="unesite prezime..." name="last_name" value="{{old('last_name', $contact->last_name)}}">
        @error('last_name')
        <p>{{$message}}</p>
        @enderror
        <input type="text" placeholder="unesite email..." name="email" value="{{old('email', $contact->email)}}">
        @error('email')
        <p>{{$message}}</p>
        @enderror
        <input type="text" placeholder="unesite br tel..." name="phone_number" value="{{old('phone_number', $contact->phone_number)}}">
        @error('phone_number')
        <p>{{$message}}</p>
        @enderror
        <input type="text" placeholder="unesite adresu..." name="address" value="{{old('address', $contact->address)}}">
        @error('address')
        <p>{{$message}}</p>
        @enderror
        <button>save</button>
    </form>
@endsection
