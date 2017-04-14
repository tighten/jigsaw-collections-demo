@extends('_layouts.master')

@section('body')
    <h4 class="text-uppercase text-dark-soft wt-light">
        Collection Name: <strong>{{ $page->collection }}</strong>
        <br>
        Total Posts: <strong>{{ $posts->count() }}</strong>
    </h4>

    <br>

    <h1>{{ $page->title }}</h1>

    <p><small>By {{ $page->author }} · {{ $page->dateFormatted() }} </small></p>

    <div class="border-t border-b p-xs-t-6 m-xs-b-6">
        <p class="text-xs text-dark-soft">References to adjacent collection items:</p>

        <div class="row">
            <div class="col-xs-6 text-left">

                @if ($page->getPrevious())
                <p><a href="{{ $page->getPrevious()->getPath() }}">
                    <icon class="chevron_left m-xs-r-2"></icon>
                    {{ $page->getPrevious()->title }}
                </a></p>
                @endif

            </div>

            <div class="col-xs-6 text-right">

                @if ($page->getNext())
                <p><a href="{{ $page->getNext()->getPath() }}">
                    {{ $page->getNext()->title }}
                    <icon class="chevron_right m-xs-l-2"></icon>
                </a></p>
                @endif

            </div>
        </div>
    </div>

    @yield('content')

    <div class="border-t border-b m-xs-t-6 p-xs-y-6">
        <p class="text-xs text-dark-soft">User-defined helper function <code>preview()</code> from <code>collections.php</code>, invoked at the item level:</p>

        <p class="text-sm"><em>{!! $page->preview(100) !!} ...</em></p>
    </div>

    @if ($page->getNext())
    <div class="border-b p-xs-y-6">
        <p class="text-xs text-dark-soft">User-defined helper function, invoked on adjacent collection items</p>

        <h4><strong>{{ $page->getNext()->title }}</strong></h4>

        <p class="text-sm"><em>{!! $page->getNext()->preview(100) !!}...</em></p>
    </div>
    @endif

    <div class="border-b p-xs-y-6">
        <p class="text-xs text-dark-soft">Access a Jigsaw Collection as Illuminate Collection</p>

        <h4>Related <a href="/categories/{{ $page->category }}"><em>{{ $page->category }}</em></a> posts:</h4>

        <div class="row">
            @foreach($posts->except($page->getFilename())->where('category', $page->category) as $post)
            <div class="col-xs-9 col-xs-offset-3 p-xs-y-2 border-b">
                <a href="{{ $post->getPath() }}">{{ $post->title }}</a>:
                <em>{{ $post->preview(50) }}...</em>
            </div>
            @endforeach
        </div>
    </div>

    <div class="border-b p-xs-y-6">
        <p class="text-xs text-dark-soft">Dump of <code>$page</code> (can also be accessed as singular version of collection name, i.e. <code>$post</code>)</p>
        <pre><code>{{ $page->dump() }}</code></pre>
    </div>
@endsection
