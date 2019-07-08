    @foreach($items as $menu_item)
        <li class="nav-item"><a href="{{ $menu_item->link() }}" class="nav-link">{{ $menu_item->title }}</a></li>
    @endforeach

    <?php 
/*
TODO: Поддержка выпадющего меню
@foreach($items as $menu_item)
    <li>
        <a class="text-center" href="{{ $menu_item->url }}">{{ $menu_item->title }}
        </a>
        @php
            $submenu = $menu_item->children;
        @endphp

        @if(isset($submenu))
            <ul class="menu">
                @foreach($submenu as $item)
                    <li><a href="{{$item->url}}">{{$item->title}} </a></li>
                @endforeach
            </ul>
        @endif
    </li>
@endforeach 
     ?>