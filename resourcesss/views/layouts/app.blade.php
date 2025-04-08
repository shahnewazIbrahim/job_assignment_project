<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'NebsCommerze')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-800">

    @include('components.header')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('components.footer')

</body>
</html>
