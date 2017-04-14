<nav class="nav-list">
    <a class="nav-list-item {{ $page->isSelected('posts') ? 'selected' : '' }}" href="{{ $page->baseUrl }}/posts">
        <icon></icon>Posts
    </a>

    <a class="nav-list-item {{ $page->isSelected('paginated') ? 'selected' : '' }}" href="{{ $page->baseUrl }}/paginated">
        <icon></icon>Pagination
    </a>

    <a class="nav-list-item {{ $page->isSelected('categories') ? 'selected' : '' }}" href="{{ $page->baseUrl }}/categories/news">
        <icon></icon>Categories
    </a>

    <a class="nav-list-item {{ $page->isSelected('people') ? 'selected' : '' }}" href="{{ $page->baseUrl }}/people">
        <icon></icon>People
    </a>

    <a class="nav-list-item {{ $page->isSelected('variables') ? 'selected' : '' }}" href="{{ $page->baseUrl }}/variables">
        <icon></icon>Variables
    </a>

    <a class="nav-list-item {{ $page->isSelected('json') ? 'selected' : '' }}" href="{{ $page->baseUrl }}/json-test.json">
        <icon></icon>JSON
    </a>

    <a class="nav-list-item {{ $page->isSelected('text') ? 'selected' : '' }}" href="{{ $page->baseUrl }}/text-test.txt">
        <icon></icon>Text
    </a>

    <a class="nav-list-item {{ $page->isSelected('dump') ? 'selected' : '' }}" href="{{ $page->baseUrl }}/page-dump">
        <icon></icon>Page
    </a>
</nav>
