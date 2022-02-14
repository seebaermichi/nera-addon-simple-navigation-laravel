@props([
    'elements'
])
<nav class="{{ config('simple-navigation.nav_class') }}">
    @foreach($elements as $element)
        <a @class([config('simple-navigation.current_class') => request()->is($page->getDataProperty('url'))])
           href="{{ $element['href'] }}">
            {{ $element['name'] }}
        </a>
    @endforeach
</nav>
