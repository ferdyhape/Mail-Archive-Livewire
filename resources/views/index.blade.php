@extends('layouts.main')
@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        @if (Auth::check())
        {{-- if auth exe here --}}
        @else
        @livewire('login')
        @endif
    </div>
</div>
@endsection