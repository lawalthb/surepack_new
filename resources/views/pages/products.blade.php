@extends('layouts.app')

@section('title', 'Our Products')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <h1 class="text-4xl font-bold mb-12">Our Product Range</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($products as $product)
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-4">{{ $product }}</h3>
                    <!-- Product details -->
                </div>
            @endforeach
        </div>
    </div>
@endsection
