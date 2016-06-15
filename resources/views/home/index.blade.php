@extends('home.layout')

@section('content')

    @include('home.banner.title')

    @include('home.services.section')

    @include('home.portfolio.section')

    @include('home.about.section')

    @include('home.team.section')

    @include('home.modals._porfolio')


    {{--@include('main.partners.section')--}}
{{--    {% include about.html %}
    {% include team.html %}
    {% include clients.html %}
    {% include contact.html %}
    {% include footer.html %}

    {% include modals.html %}
    {% include js.html %}--}}

    @include('home.modals._porfolio')

@endsection