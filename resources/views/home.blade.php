@extends('layouts.master')

{{--@section('title')  @endsection--}}
@section('title', 'home')

@section('content')
    <div>
        <x-alert data-id="23" class="h-22">
            <h1>The alert message from slot</h1>
        </x-alert>
    </div>
@endsection
