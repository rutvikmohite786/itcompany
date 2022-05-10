@extends('layouts.app')
@section('content')
<div class="container-fluid page-header d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5 mb-5">
    <h1 class="display-4 text-white mb-3 mt-0 mt-lg-5">Service</h1>
    <div class="d-inline-flex text-white">
        <p class="m-0"><a class="text-white" href="home">Home</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0"><a class="text-white" href="service">Services</a></p>
        <p class="m-0 px-2">/</p>
        <p class="m-0">Web Services</p>
    </div>
</div>
<div class="container">
    <div class="d-flex">
        <i class="{{$webservice->icon}}"></i>
        <div class="d-flex flex-column">
            <h4 class="font-weight-bold mb-3">{{$webservice->title}}</h4>
            <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr erat</p>
        </div>
    </div>
    <div class="container">
        <div class="container">
            @foreach($webservice->subservice as $subserv)
            <div class="d-flex">
                <i class="{{$subserv->icon}}"></i> &nbsp;&nbsp;&nbsp;&nbsp;
                <div class="d-flex flex-column">
                    <h4 class="font-weight-bold mb-3">{{$subserv->name}}</h4>
                    <p>Et kasd justo clita amet kasd, vero amet vero eos kasd diam justo, ipsum diam sed elitr erat</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@include('pages.footer')
@endsection