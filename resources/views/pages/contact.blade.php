@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <h1 class="text-4xl font-bold mb-12">Get in Touch</h1>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
            <!-- Contact form -->
            <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                @csrf
                <!-- Form fields -->
            </form>

            <!-- Contact information -->
            <div>
                <!-- Company contact details -->
            </div>
        </div>
    </div>
@endsection
