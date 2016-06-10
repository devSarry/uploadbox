{{--
    **** How to use this partial *****
                @include('partials._dropdown',
                    ['menu' => [
                        ['name' => 'item', 'route' => '/path'],
                        ['name' => 'item', 'route' => '/path'],
                        ['name' => 'item', 'route' => '/path']
                        ]])

--}}
<li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">
        @foreach($menu as $item)
            <li><a href="{{$item['route'] }}">{{$item['name']}}</a></li>
        @endforeach
    </ul>
</li>

