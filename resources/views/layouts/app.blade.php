<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon/favicon.ico') }}">

    <meta name="description" content="@yield('description', 'Inspiration House — building stronger communities and creating lasting social impact.')">

    <title>@yield('title', 'Inspiration House')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen">

    {{-- Website Navigation --}}
    @include('layouts.navigation')

    {{-- Main Page Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Website Footer --}}
    @include('layouts.footer')

</body>
</html>