@extends('layouts.master')

@section('title') {{ $title }} @endsection
{{--@section('title', 'home')--}}

@section('content')
    @if(count($teams) > 0)
        <div>
            @foreach($teams as $team)
                <div>{{ $team }}</div>
            @endforeach
        </div>
    @else
        <div>No teams available.</div>
    @endif
@endsection
