@extends('backend_layout')

@section('title', 'Create Portfolio')

@section('content')
    <h1 class="page-header">Create Portfolio</h1>
    <hr>
    <div class="row">
        <div class="panel panel-default col-md-6">
        	<div class="panel-body">
                {!! form($data['form']) !!}
        	</div>
        </div>
    </div>
@stop