---
extends: _layouts.post
title: My Sixth Post
date: 2016-06-01
number: 1
category: faq
---
@section('content')


<div class="panel p-xs-4 m-xs-y-4">
    <h4>Test of YAML Frontmatter in a Blade post:</h4>
    Title: <em>{{ $item->title }}</em><br>
    Author: <em>{{ $item->author }}</em><br>
    Category: <em>{{ $category }}</em><br>
    Number: <em>{{ $post->number }}</em>
</div>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, placeat saepe, voluptatibus dignissimos expedita quae et sit quia ipsa error blanditiis delectus at consequatur doloremque ratione nesciunt commodi nihil temporibus.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos tempora nostrum veritatis neque aliquam earum. Rerum accusamus repudiandae esse tempore doloribus necessitatibus natus ut ea, asperiores deserunt sequi cupiditate repellendus!</p>

@endsection
