@extends('backend_layout')

@section('title', 'Portfolio Index')

@section('content')
    <h1 class="page-header">View All Your Posts</h1>
    <hr>
    @foreach($data['portfolios']->chunk(3) as $portfolios)
    <div class="row">
        @foreach($portfolios as $portfolio)
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $portfolio->title }}</h3>
                </div>
                <div class="panel-body">
                    <div class="post-image">
                        <img src="{{ url($portfolio->photo_path) }}" alt="">
                        <a style="position:absolute;left:85%;top:5%;" href="{{url('portfolios/' . $portfolio->id . '/edit')}}" class="btn btn-info btn-fab"><i class="material-icons">mode_edit</i></a>
                    </div>
                    <p>{{ $portfolio->description }}</p>
                    <hr>
                    <div class="panel-footer"><b>{{ $portfolio->date }}</b> <em class="pull-right">{{ $portfolio->service }}</em></div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
    @endforeach
@stop