@extends('_layouts.master')
@section('body')
<h2>Dump of <em>$config</em></h2>

<pre><code>{{ $config->dump() }}</code></pre>

@endsection
