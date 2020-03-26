@foreach($pages as $page)
    <li class="{{ Request::is($page->uri_wildcard) ? 'active' : '' }} {{ count($page->children) ? ($page->isChild() ? 'dropdown-submenu' : 'dropdown') : '' }}">
        <a href="{{ url($page->uri) }}">
            {{ $page->title }}

            @if(count($page->children))
                <span class="caret {{ $page->isChild() ? 'right' : '' }}"></span>
            @endif
        </a>

        @if(count($page->children))
            <ul class="dropdown-menu">
                @include('partials.navigation', ['pages' => $page->children])
            </ul>
        @endif
    </li>
@endforeach
    <li style="right: 0; position: absolute;">
        <a href="/auth/login" >Login</a>
    </li>