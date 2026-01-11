@extends('layouts.app')

@section('title', 'Welcome to Vue.js')

@section('content')
    <div id="app">
        <!-- Vue.js will mount here -->
    </div>
@endsection

@push('scripts')
    @vite(['resources/js/welcome.js'])
@endpush