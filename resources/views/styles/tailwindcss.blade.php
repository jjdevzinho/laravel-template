<!DOCTYPE html>
<html lang="en" class="theme-dark">
@include('_partials.head')

<body class="bg-base-200 text-content-200">
    @include('_partials.header')
    @include('_partials.navbar')
    <div class="container mx-auto my-4 px-3">
        @yield('content')
    </div>
    @include('_partials.footer')
    @include('_partials.javascript')
</body>

</html>
