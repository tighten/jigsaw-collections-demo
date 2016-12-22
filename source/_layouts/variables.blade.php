@extends('_layouts.master')

@section('body')

    <h2>Variables</h2>

    <div class="m-xs-y-4 border-b">
        <p>Local (title): {{ $title }}</p>
        <p>Local (author): {{ $author }}</p>
        <p>Meta (filename): {{ $filename }}</p>
        <p>Helper function: {{ $config->helperFunction(15) }}</p>
        <p>Illuminate Collection methods are available on config arrays (<code>sum</code>, for example): {{ $config->global_array->sum() }}</p>
    </div>

    <div class="m-xs-y-4 border-b">
        <p>Iterating variables when referenced as objects:</p>
        <ul>
        @foreach($config->global_array as $item)
            <li>Array item: {{ $item }}</li>
        @endforeach
        </ul>
    </div>

    <div class="m-xs-y-4 border-b">
        <p>Nested arrays are accessible as iterable objects below first level:</p>
        <ul>
        @foreach($config->nested_array as $array)
            <li>Array item: {{ $array->name }}
                <ul>

                @foreach($array as $item)
                    <li>{{ $item }}</li>
                @endforeach

                </ul>
            </li>
        @endforeach
        </ul>
    </div>

    @yield('the_section')

@endsection
