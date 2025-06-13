<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'My App')</title>
    <!-- Include CSS, Meta tags etc. -->
</head>
<body>

    {{-- Header --}}
    @include('admin.header')

    <div class="content">
        @yield('content')
    </div>

    {{-- Footer --}}
    @include('admin.footer')

</body>
</html>