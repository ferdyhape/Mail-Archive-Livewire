<!doctype html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>

    {{-- content --}}
    @yield('content')
    {{-- end of content --}}


    {{-- script --}}
    @include('layouts.script')
    @livewireScripts
    {{-- end of script --}}
</body>

</html>