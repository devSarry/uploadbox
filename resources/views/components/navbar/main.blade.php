<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        @include('components.navbar._navbar_hamburger',['brand' => 'UPLOAD APP'])
        <div class="navbar-collapse collapse" id="bs-navbar-collapse-1" aria-expanded="false">
            <ul class="nav navbar-nav navbar-right">
                <li class="{{ classActivePath('/') }}"><a href="{{url('/')}}">Home</a></li>
                <li class="{{ classActivePath('photos/create') }}"><a href="{{url('photos/create')}}">Upload</a></li>
            </ul>
        </div>
    </div>
</nav>

