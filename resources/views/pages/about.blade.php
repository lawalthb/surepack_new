@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <div class="container mx-auto px-4 py-12">
        <h1 class="text-4xl font-bold mb-8">About Sure Packaging Industries Limited</h1>

        <div class="prose max-w-none">
            <p class="text-lg mb-6">Founded in {{ $companyInfo['founded'] }} by {{ $companyInfo['founder'] }}, Sure Packaging Industries Limited is a trusted name in Nigeria's flexible packaging industry.</p>

            <!-- Company history and values -->
        </div>
    </div>
@endsection
