@extends('layouts.main')
@section('content')
<div class="container py-4">
    <div class="row justify-content-center">

        @if (Auth::check())
        <h2>Mail Archive</h2>
        <div class="d-flex gap-2 my-3">
            <button class="btn btn-info" onclick="archiveshow()">Archive</button>
            <button class="btn btn-info" onclick="categoryshow()">Category</button>
            <button class="btn btn-info" onclick="activityshow()">Activity</button>
        </div>
        <div id="archive-display" style="display: none;">
            @livewire('dashboard.archive.index')
        </div>
        <div id="category-display" style="display: none;">
            @livewire('dashboard.category.index')
        </div>
        <div id="activity-display" style="display: none;">
            @livewire('dashboard.activity.index')
        </div>

        @livewire('auth.logout')
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
<script>
    function archiveshow() {
        document.getElementById("category-display").style.display = "none";
        document.getElementById("activity-display").style.display = "none";
        document.getElementById("archive-display").style.display = "block";
    }
    function categoryshow() {
        document.getElementById("activity-display").style.display = "none";
        document.getElementById("archive-display").style.display = "none";
        document.getElementById("category-display").style.display = "block";
    }
    function activityshow() {
        document.getElementById("category-display").style.display = "none";
        document.getElementById("archive-display").style.display = "none";
        document.getElementById("activity-display").style.display = "block";
    }
</script>
@endsection