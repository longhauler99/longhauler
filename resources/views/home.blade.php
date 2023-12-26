@extends('layouts.master')

@section('title') {{ $title }} @endsection
{{--@section('title', 'home')--}}

@section('content')
    <div>
        {{ $content }}
    </div>
@endsection
