@extends('layouts.master')

@section('content')
    <h3>This is home</h3>
    @foreach($blogs as $blog)
        hi {{$blog->title}}
    @endforeach
@endsection


@php $data = true @endphp
{{--isset basically means if the parameter value is true, do this--}}
@isset($data)
    Success!
@endisset
