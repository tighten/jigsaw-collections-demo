@extends('_layouts.master')

@section('body')
<h2>Posts</h2>

    @foreach ($posts as $post)
    <div class="row">
        <div class="col-xs-12">
            <h3><a href="{{ $post->getPath() }}">{{ $post['title'] }}</a></h3>

            <p class="text-sm">by {{ $post->author }} · {{ $post->dateFormatted() }} · Number {{ $post->number }}</p>

            <p class="p-xs-b-6 border-b">{!! $post->preview(180) !!}...</p>
        </div>
    </div>
    @endforeach

@endsection
