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
    <!-- Top Bar -->
    <div class="bg-green-600 text-white py-2">
        <div class="container mx-auto px-4">
            <div class="flex justify-end space-x-4 text-sm">
                <a href="tel:+2348000000000" class="hover:text-green-200">
                    <i class="fas fa-phone"></i> +234 800 000 0000
                </a>
                <a href="mailto:info@surepack.com" class="hover:text-green-200">
                    <i class="fas fa-envelope"></i> info@surepack.com
                </a>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo Section -->
                <div class="flex items-center">
                    <a href="{{ route('home') }}" class="flex items-center">
                        <img src="{{ asset('images/logo_full.png') }}" alt="SurePack Logo is here" class="h-16 w-auto mr-3">
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button class="md:hidden" x-data @click="$store.mobileMenu.toggle()">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-green-600 font-medium">Home</a>
                    <a href="{{ route('products') }}" class="text-gray-700 hover:text-green-600 font-medium">Products</a>
                    <a href="{{ route('services') }}" class="text-gray-700 hover:text-green-600 font-medium">Services</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-green-600 font-medium">About</a>
                    <a href="{{ route('contact') }}" class="text-gray-700 hover:text-green-600 font-medium">Contact</a>
                    <a href="{{ route('quote') }}" class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition duration-300">Get Quote</a>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="md:hidden" x-show="$store.mobileMenu.isOpen" x-cloak>
            <div class="px-4 py-2 space-y-3">
                <a href="{{ route('home') }}" class="block text-gray-700 hover:text-green-600 py-2">Home</a>
                <a href="{{ route('products') }}" class="block text-gray-700 hover:text-green-600 py-2">Products</a>
                <a href="{{ route('services') }}" class="block text-gray-700 hover:text-green-600 py-2">Services</a>
                <a href="{{ route('about') }}" class="block text-gray-700 hover:text-green-600 py-2">About</a>
                <a href="{{ route('contact') }}" class="block text-gray-700 hover:text-green-600 py-2">Contact</a>
                <a href="{{ route('quote') }}" class="block bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 text-center">Get Quote</a>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <img src="{{ asset('images/logo-white.png') }}" alt="SurePack Logo" class="h-12 w-auto mb-4">
                    <p class="text-gray-400">Leading manufacturer of flexible packaging solutions in Nigeria</p>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('products') }}" class="text-gray-400 hover:text-white">Products</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-white">Services</a></li>
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-white">About Us</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-white">Contact</a></li>
                    </ul>
                </div>

                <!-- Products -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Products</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Printed Water Roll</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Packing Bags</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Bread Wrapper</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Industrial Bags</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Us</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li>Lagos, Nigeria</li>
                        <li>Phone: +234 800 000 0000</li>
                        <li>Email: info@surepack.com</li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>© {{ date('Y') }} Sure Packaging Industries Limited. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Alpine.js Store for Mobile Menu -->
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.store('mobileMenu', {
                isOpen: false,
                toggle() {
                    this.isOpen = !this.isOpen
                }
            })
        })
    </script>
</body>
</html>
