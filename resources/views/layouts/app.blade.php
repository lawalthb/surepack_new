<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>
    <meta name="description" content="@yield('description')">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-lg">
        <!-- Navigation content -->
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <a href="{{ route('home') }}" class="text-2xl font-bold text-blue-600">SurePack</a>
                <div class="space-x-6">
                    <a href="{{ route('home') }}" class="hover:text-blue-600">Home</a>
                    <a href="{{ route('products') }}" class="hover:text-blue-600">Products</a>
                    <a href="{{ route('services') }}" class="hover:text-blue-600">Services</a>
                    <a href="{{ route('about') }}" class="hover:text-blue-600">About</a>
                    <a href="{{ route('contact') }}" class="hover:text-blue-600">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white mt-12">
        <!-- Footer content -->
    </footer>
</body>
</html>
