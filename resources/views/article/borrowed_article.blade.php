@extends('layouts.hiiluo', ['page_title' => '转载的文章'])

@section('content')
    <h1 class="header-text">转载的文章</h1>
    <div class="progress plain">
        <div class="bar" style="width: 82%;"></div>
    </div>
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