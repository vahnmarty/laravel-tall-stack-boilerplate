@extends('errors::minimal')

@section('content')
<div class="bg-white">
    <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8 lg:flex lg:justify-between">
        <div class="max-w-xl">
            <h2 class="text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Error 429</h2>
            <p class="mt-5 text-xl text-gray-500">
                Sorry, Too many requests.
            </p>

            <a href="{{ url('/') }}"
               class="mt-8 block text-center w-full py-3 px-4 rounded-md shadow bg-indigo-500 text-white font-medium hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900">Back</a>
        </div>
    </div>
</div>
@endsection