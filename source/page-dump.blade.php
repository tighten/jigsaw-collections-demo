@extends('_layouts.master')
@section('body')
<h2>Dump of <em>$page</em></h2>

<pre><code>{{ $page->dump() }}</code></pre>

@endsection
