@extends('layouts.app')

@section('title', 'Home')
@section('description', 'Leading manufacturer of flexible packaging solutions in Nigeria')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-blue-600 text-white py-32">
        <div class="container mx-auto px-4">
            <h1 class="text-5xl font-bold mb-6">Premium Packaging Solutions for Your Business</h1>
            <p class="text-xl mb-8">From printed water rolls to industrial packaging, we deliver quality that speaks your brand's language</p>
            <a href="{{ route('quote') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100">Get a Quote</a>
        </div>
    </div>

    <!-- Products Preview -->
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold mb-12 text-center">Our Solutions</h2>
        <!-- Product grid -->
    </div>

    <!-- Vision & Mission -->
    <div class="bg-gray-50 py-16">
        <div class="container mx-auto px-4">
            <!-- Vision and mission statements -->
        </div>
    </div>

    <!-- CTA Section -->
    <div class="bg-blue-600 text-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-6">Ready to Elevate Your Packaging?</h2>
            <p class="mb-8">Discover how quality packaging can benefit your business</p>
            <a href="{{ route('contact') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100">Contact Us Today</a>
        </div>
    </div>
@endsection
