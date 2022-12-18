<!DOCTYPE html>
<title>My Blog</title>
<link rel="stylesheet" href="/app.css">
<script src="/app.js"></script>

<body>
    @foreach ($posts as $post)
        
    <article>
        <h1>
            <a href="/posts/{{ $post->slug }}">
            {{ $post->title }}
            </a>       
        </h1>

        <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>

        <div>
            {!! $post->excerpt !!}
        </div>
    </article>

   @endforeach
</body>