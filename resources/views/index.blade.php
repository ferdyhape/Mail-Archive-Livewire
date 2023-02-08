@extends('layouts.main')
@section('content')
<div class="container py-4">
    <div class="row justify-content-center">

        @if (Auth::check())
        <h2>Mail Archive</h2>
        @livewire('dashboard.menu')
        @livewire('dashboard.table')
        @livewire('auth.logout')

        @else
        @livewire('auth.login')
        @endif

    </div>
</div>
@endsection