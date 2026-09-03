@extends('layouts.app')

@section('title', 'Page Not Found | Inspiration House')

@section('description', 'The page you are looking for could not be found.')

@section('content')

<section class="error-page">

    <div class="error-page-content">

        <span>404 ERROR</span>

        <h1>
            We Couldn't Find
            That Page.
        </h1>

        <p>
            The page you are looking for may have moved, been removed,
            or the address may have been entered incorrectly.
        </p>

        <div class="error-actions">

            <a href="{{ route('home') }}">
                Back To Home →
            </a>

            <a href="{{ route('contact') }}">
                Contact Us
            </a>

        </div>

    </div>

</section>

@endsection