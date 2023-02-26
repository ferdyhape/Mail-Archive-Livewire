@extends('layouts.main')
@section('content')
    @if (Auth::check())
        @livewire('dashboard.index')
    @else
        @livewire('auth.login')
    @endif
    <style>
        body {
            font-family: 'Source Sans Pro', sans-serif;
        }
    </style>
@endsection
