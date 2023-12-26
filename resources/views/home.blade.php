@extends('layouts.master')

@section('title')  @endsection
{{--@section('title', 'home')--}}
@push('style')
    <style>
        .red {
            background: red;
        }
    </style>
@endpush
@section('content')
    @if(count($teams) > 0)
        <div>
            @foreach($teams as $team)
                <div>{{ $team }}</div>
            @endforeach
        </div>
    @else
        <div>No teams available.</div>
{{--        {{ $title }}--}}
    @endif
@endsection
