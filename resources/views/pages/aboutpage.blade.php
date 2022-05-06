@extends('layouts.app')
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
    <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">About</h1>
    <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="home">Home</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">About</p>
    </div>
</div>
<!-- Page Header Start -->
@include('pages.about')
@include('pages.footer')
@endsection