<li class="nav-item">
    <a href="{{ url($url) }}" @class([
        'nav-link',
        'text-white',
        'active' => request()->is($activePath),
    ])>
        {{ $name }}
    </a>
</li>
