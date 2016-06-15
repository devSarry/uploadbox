<!DOCTYPE html>
<html lang="en">


@include('home.partials.head', ['title' => 'Hiusmaa'])


    <body id="page-top" class="index">

    @include('home.partials.navigation')

        @yield('content')

    @include('home.partials.footer')

    @include('home.partials.javascripts')

    </body>

</html>