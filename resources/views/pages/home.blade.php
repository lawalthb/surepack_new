@extends('layouts.app')

@section('title', 'Home')
@section('description', 'Leading manufacturer of flexible packaging solutions in Nigeria')

@section('content')
    <!-- Hero Section with Slider -->
    <div class="relative h-[600px] overflow-hidden">
        <!-- Slider Container -->
        <div class="relative h-full" x-data="{ activeSlide: 1 }">
            <!-- Slide 1 -->
            <div x-show="activeSlide === 1" class="absolute inset-0 transition-opacity duration-500">
                <img src="{{ asset('images/slider1.jpg') }}" class="w-full h-full object-cover" alt="Packaging Solutions">
                <div class="absolute inset-0 bg-black/40"></div>
            </div>
            <!-- Slide 2 -->
            <div x-show="activeSlide === 2" class="absolute inset-0 transition-opacity duration-500">
                <img src="{{ asset('images/slider2.jpg') }}" class="w-full h-full object-cover" alt="Industrial Packaging">
                <div class="absolute inset-0 bg-black/40"></div>
            </div>
            <!-- Slide 3 -->
            <div x-show="activeSlide === 3" class="absolute inset-0 transition-opacity duration-500">
                <img src="{{ asset('images/slider3.jpg') }}" class="w-full h-full object-cover" alt="Quality Packaging">
                <div class="absolute inset-0 bg-black/40"></div>
            </div>

            <!-- Hero Content -->
            <div class="absolute inset-0 flex items-center">
                <div class="container mx-auto px-4">
                    <div class="max-w-3xl">
                        <h1 class="text-5xl font-bold mb-6 text-white">Premium Packaging Solutions for Your Business</h1>
                        <p class="text-xl mb-8 text-white">From printed water rolls to industrial packaging, we deliver quality that speaks your brand's language</p>
                        <a href="{{ route('quote') }}" class="bg-green-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-green-700 transition duration-300">Get a Quote</a>
                    </div>
                </div>
            </div>

            <!-- Slider Controls -->
            <div class="absolute bottom-5 left-1/2 transform -translate-x-1/2 flex space-x-3">
                <button @click="activeSlide = 1" :class="{'bg-green-600': activeSlide === 1}" class="w-3 h-3 rounded-full bg-white/50"></button>
                <button @click="activeSlide = 2" :class="{'bg-green-600': activeSlide === 2}" class="w-3 h-3 rounded-full bg-white/50"></button>
                <button @click="activeSlide = 3" :class="{'bg-green-600': activeSlide === 3}" class="w-3 h-3 rounded-full bg-white/50"></button>
            </div>
        </div>
    </div>

    <!-- Products Preview Section -->
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold mb-12 text-center text-gray-800">Our Solutions</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Product Cards -->
            <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition duration-300">
                <img src="{{ asset('images/water-roll.jpg') }}" alt="Water Roll" class="w-full h-48 object-cover rounded-lg mb-4">
                <h3 class="text-xl font-semibold mb-2">Printed Water Roll</h3>
                <p class="text-gray-600">Custom printed rolls for water packaging needs</p>
            </div>
            <!-- Add more product cards -->
        </div>
    </div>

    <!-- Vision & Mission Section -->
    <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-green-600">Our Vision</h3>
                    <p class="text-gray-700">To be a global leader in innovative and sustainable packaging solutions, delivering unmatched quality and service to industries worldwide.</p>
                </div>
                <div class="bg-white p-8 rounded-lg shadow-lg">
                    <h3 class="text-2xl font-bold mb-4 text-green-600">Our Mission</h3>
                    <p class="text-gray-700">Sure Pack provides high-quality, cost-effective, customisable packaging solutions to safeguard products and brands.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-green-600 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Elevate Your Packaging?</h2>
            <p class="mb-8 text-lg">Discover how quality packaging can benefit your business</p>
            <div class="flex justify-center gap-4">
                <a href="{{ route('contact') }}" class="bg-white text-green-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">Contact Us Today</a>
                <a href="{{ route('quote') }}" class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-green-600 transition duration-300">Get a Quote</a>
            </div>
        </div>
    </div>

    <!-- Auto-advance slider script -->
    <script>
        document.addEventListener('alpine:init', () => {
            let interval = setInterval(() => {
                let current = Alpine.store('activeSlide');
                Alpine.store('activeSlide', current === 3 ? 1 : current + 1);
            }, 5000);
        });
    </script>
@endsection
