@extends('layouts.main')
@section('title', $contact->first_name.' '.$contact->last_name)
@section('content')


    <ul>
        <li>Name:{{$contact->first_name." ".$contact->last_name }}</li>
        <li>Email: {{$contact->email}}</li>
        <li>Phone number: {{$contact->phone_number}}</li>
        <li>Address: {{$contact->address}}</li>
    </ul>


@endsection
