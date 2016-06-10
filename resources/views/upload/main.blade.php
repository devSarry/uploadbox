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
            <form method="POST" action={{ action('PhotosController@store') }} accept-charset="UTF-8" class="form-group">
                {{ csrf_field() }}
                <image-upload-box name="photo_name"></image-upload-box>
                <div class="form-group">
                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Name">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="reset" class="btn btn-default">Cancel</button>
                        <button id="submitButton" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>


            <br>
            <pre>@{{ $data | json }}</pre>
        </div>

    </div>
</div>

@stop

