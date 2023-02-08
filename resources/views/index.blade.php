@extends('layouts.main')
@section('content')
<div class="container py-4">
    <div class="row justify-content-center">

        @if (Auth::check())
        <h2>Mail Archive</h2>
        <div class="d-flex justify-content-between">
            @livewire('dashboard.menu')
            @livewire('auth.logout')
        </div>
        @livewire('dashboard.table')

        @else
        @livewire('auth.login')
        @endif

    </div>
</div>
<style>
    body {
        font-family: 'Source Sans Pro', sans-serif;
    }
</style>
@endsection