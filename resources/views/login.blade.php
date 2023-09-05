@extends('layouts.master')

@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{$error}}
        @endforeach
    @endif

    <form action="{{route('login.submit')}}" method="post">
        @csrf
        <label for="">Username</label>
        <input name="username" type="text">

        <label for="">Email</label>
        <input name="email" type="email">

        <label for="">Password</label>
        <input name="password" type="password">

        <button type="submit">Submit</button>
    </form>

@endsection
