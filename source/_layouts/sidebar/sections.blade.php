<nav class="nav-list">
    <a class="nav-list-item {{ $config->selected('posts') ? 'selected' : '' }}" href="{{ $config->baseUrl }}/posts">
        <icon></icon>Posts
    </a>

    <a class="nav-list-item {{ $config->selected('pagination') ? 'selected' : '' }}" href="{{ $config->baseUrl }}/pagination">
        <icon></icon>Pagination
    </a>

    <a class="nav-list-item {{ $config->selected('category') ? 'selected' : '' }}" href="{{ $config->baseUrl }}/categories/news">
        <icon></icon>Categories
    </a>

    <a class="nav-list-item {{ $config->selected('people') ? 'selected' : '' }}" href="{{ $config->baseUrl }}/people">
        <icon></icon>People
    </a>

    <a class="nav-list-item {{ $config->selected('variables') ? 'selected' : '' }}" href="{{ $config->baseUrl }}/variables">
        <icon></icon>Variables
    </a>

    <a class="nav-list-item {{ $config->selected('json') ? 'selected' : '' }}" href="{{ $config->baseUrl }}/json-test.json">
        <icon></icon>JSON
    </a>

    <a class="nav-list-item {{ $config->selected('json') ? 'selected' : '' }}" href="{{ $config->baseUrl }}/text-test.txt">
        <icon></icon>Text
    </a>

    <a class="nav-list-item {{ $config->selected('dump') ? 'selected' : '' }}" href="{{ $config->baseUrl }}/config-dump">
        <icon></icon>Config
    </a>
</nav>
