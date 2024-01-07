@extends('layouts.master')

{{--@section('title')  @endsection--}}
@section('title', 'home')

@section('content')
    <div>
        <x-alert :message="session('activeNav')" />
    </div>
@endsection
