@php
    $configData = Helper::appClasses();
@endphp

@extends('layouts/blankLayout')

@section('title', '404 Page Not Found')

@section('page-style')

<link rel="stylesheet"
      href="{{ asset('assets/vendor/css/pages/page-misc.css') }}">

@endsection

@section('content')

<div class="container-xxl container-p-y">

    <div class="misc-wrapper">

        <h2 class="mb-1 mt-4">
            Page Not Found :(
        </h2>

        <p class="mb-4 mx-2">
            Oops! 😖 The requested URL was not found on this server.
        </p>

        <a href="javascript:history.back()"
           class="btn btn-primary mb-4">

            Back to home

        </a>

        <div class="mt-4">

            <img src="{{ asset('assets/img/illustrations/page-misc-error.png') }}"
                 alt="page-misc-error"
                 width="225"
                 class="img-fluid">

        </div>

    </div>

</div>

<div class="container-fluid misc-bg-wrapper">

    <img src="{{ asset('assets/img/illustrations/bg-shape-image-' . $configData['style'] . '.png') }}"
         alt="page-misc-error">

</div>

@endsection