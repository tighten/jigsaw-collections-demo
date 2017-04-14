<br>

<nav class="nav-list">

@foreach ($posts as $post)
    <a class="nav-list-item {{ $post->postIsSelected($page) ? 'selected' : '' }}" href="{{ $post->getPath() }}">
        <icon></icon>{{ $post->title }}
    </a>
@endforeach

</nav>
