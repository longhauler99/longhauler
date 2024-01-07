@extends('layouts.master')

{{--@section('title')  @endsection--}}
@section('title', 'home')

@section('content')
    <div>
        <x-alert message="The alert message" type="error" />
    </div>
@endsection
