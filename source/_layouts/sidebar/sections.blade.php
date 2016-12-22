<nav class="nav-list">
    <a class="nav-list-item {{ $config->selected('posts') ? 'selected' : '' }}" href="/posts">
        <icon></icon>Posts
    </a>

    <a class="nav-list-item {{ $config->selected('paginated') ? 'selected' : '' }}" href="/paginated">
        <icon></icon>Pagination
    </a>

    <a class="nav-list-item {{ $config->selected('category') ? 'selected' : '' }}" href="/categories/news">
        <icon></icon>Categories
    </a>

    <a class="nav-list-item {{ $config->selected('people') ? 'selected' : '' }}" href="/people">
        <icon></icon>People
    </a>

    <a class="nav-list-item {{ $config->selected('variables') ? 'selected' : '' }}" href="/variables">
        <icon></icon>Variables
    </a>

    <a class="nav-list-item {{ $config->selected('json') ? 'selected' : '' }}" href="/json-test.json">
        <icon></icon>JSON
    </a>

    <a class="nav-list-item {{ $config->selected('json') ? 'selected' : '' }}" href="/text-test.txt">
        <icon></icon>Text
    </a>

    <a class="nav-list-item {{ $config->selected('dump') ? 'selected' : '' }}" href="/config-dump">
        <icon></icon>Config
    </a>
</nav>
