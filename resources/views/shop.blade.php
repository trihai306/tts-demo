@extends('layouts.layout')
@section('content')
    @include('components.hero-section', ['title' => 'Shop'])
    <livewire:shop></livewire:shop>

    @include('components.customers-reviews')
    <livewire:latest-posts />
@endsection
@section('script')
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    </script>
@endsection
