@extends('layouts.master')

@section('title') {{ $title }} @endsection
{{--@section('title', 'home')--}}

@section('content')
    <div>
        @if(true)
        {!! $content !!}
        @else
            No content to see.
        @endif
    </div>
@endsection
