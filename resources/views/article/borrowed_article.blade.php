@extends('layouts.hiiluo', ['page_title' => '转载的文章'])

@section('content')
    <a href="{{ url('article/borrowed_article_edit') }}" class="btn adding">添加</a>
    <div>
    @foreach ($list as $key => $article)
        <p class="space">
            <a href="{{ $article->href }}" target="_blank" class="black">
                <h3>{{ $key+1 }} . {{ $article->title }}<h3>
            </a>
        </p>
        <span class="description">description:  {{ $article->description }}<span>
        <span class="progress">updated:  {{ $article->updated_at }}<span>
    @endforeach
    </div>
@endsection