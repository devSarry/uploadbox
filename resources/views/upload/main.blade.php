@extends('layout')

@section('title', 'Upload')

@section('content')
    <div class="row">
        <h1>Upload Photo</h1>
        <p class="lead">
            This is a demo app to test working with some js libraries.
            <br> Dropzone and VueJs </p>
    </div>

<div class="row">
    <div class="panel panel-default">
        <br>
        <div class="panel-body">
            <image-upload-box action="{{url('photos')}}">
                {{ csrf_field() }}
                penis penis penis
            </image-upload-box>
            <br>
            <form method="POST" action={{ url('photos') }} accept-charset="UTF-8" class="form-group">
                {{ csrf_field() }}

                <input type="text" name="name" class="form-control" title="Name" placeholder="enter name" required="required" >
                <hr>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>

    </div>
</div>

@stop

