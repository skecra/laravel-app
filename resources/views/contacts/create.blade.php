@extends('layouts.main')

@section('content')

<div class="row">
    <div class="col-6 offset-6">
        <form action="{{ route('contacts.store') }}" METHOD="POST" class="form-control">
            @csrf
            <input type="text" placeholder="unesite ime..." name="first_name" value="{{old('first_name')}}" class="form-control">
            @error('first_name')
            <p>{{$message}}</p>
            @enderror
            <input type="text" placeholder="unesite prezime..." name="last_name" value="{{old('last_name')}}" class="form-control">
            @error('last_name')
            <p>{{$message}}</p>
            @enderror
            <input type="text" placeholder="unesite email..." name="email" value="{{old('email')}}" class="form-control">
            @error('email')
            <p>{{$message}}</p>
            @enderror
            <input type="text" placeholder="unesite br tel..." name="phone_number" value="{{old('phone_number')}}" class="form-control">
            @error('phone_number')
            <p>{{$message}}</p>
            @enderror
            <input type="text" class="form-control" placeholder="unesite adresu..." name="address" value="{{old('address')}}">
            @error('address')
            <p>{{$message}}</p>
            @enderror
            <button>save</button>
        </form>

    </div>
</div>


@endsection
