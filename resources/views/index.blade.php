@extends('layouts.main')
@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        @if (Auth::check())
        <h2>Hello World</h2>
        @livewire('auth.logout')
        @else
        @livewire('auth.login')
        @endif
    </div>
</div>
@endsection