@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-3">
            <div class="container">
                <h3>New Contact</h3>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="container">
                <h3>New Contact</h3>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="container">
                <h3>Edit Containat</h3>
                <h5>service:-</h5>
                <form>
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{$about->title}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{$about->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ofiice address:-</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" value="{{$about->description}}" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ofiice address:-</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" value="{{$about->description}}" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">ofiice address:-</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" value="{{$about->description}}" placeholder="name@example.com">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
                <br>
                <h5><b>about:-</b></h5>
                <form>
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection