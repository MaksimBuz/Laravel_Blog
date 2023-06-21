@extends('layouts.main')
@section('content')
<article class="single-post zerogrid">
    <div class="row wrap-post">
        <div class="entry-header">
            <span class="time">Дата публикации{{$post->created_at}}</span>
            <h2 class="entry-title"><a href="#">{{$post->title}}</a></h2>
        </div>
        <div class="post-thumbnail-wrap">
            <img src="{{ asset('storage/' . $post->preview_img	) }}" alt="">
        </div>
        <div class="entry-content">
            <p>{{$post->content}}</p>
        </div>
    </div>
</article>
    @endsection
