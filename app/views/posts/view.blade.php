@extends('layouts/default')

@section('scripts')
@parent
<script>
$(function(){

  $('.post-view .content pre code').each(function(i, e) {hljs.highlightBlock(e)});

})
</script>
@stop

@section('content')
<div class="page-header">
  @include('posts.includes.header')
</div>

<div class="row post-view">
  <div class="span3">
  @include('posts.includes.sidenav')
  </div>
  <div class="span9">
    <h3 class="title">{{ $post->title }}</h3>
      <ul class="nav nav-pills">
      @if (Auth::check() && (Auth::user()->id == $post->user_id))
        <li class="pull-right"><a href="{{ URL::to('posts/' . $post->id . '/delete') }}"><i class="icon-trash"></i> 삭제</a></li>
        <li class="pull-right"><a href="{{ URL::to('posts/' . $post->id . '/edit') }}"><i class="icon-edit"></i> 수정</a></li>
      @else
        <li><a href="{{ URL::to('users/' . $post->user->id . '/' . $post->user->username) }}" title="글쓴이"><i class="icon-user"></i> {{ $post->user->username }}</a></li>
        <li class="disabled"><a href="#" title="조회"><i class="icon-eye-open"></i> {{ $post->views }}</a></li>
        <li class="disabled"><a href="#" title="코멘트"><i class="icon-comment"></i> </a></li>
        <li class="disabled"><a href="#" title="등록"><i class="icon-time"></i> {{ Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->diffForHumans() }}</a></li>
      </ul>
      @endif
    <div class="content">
      {{ $markdown->transformMarkdown($post->content) }}
    </div>
    <ul class="nav nav-pills">
      <li class="pull-right"><a href="{{ URL::to('posts/' . $post->category) }}"><i class="icon-list"></i> 목록</a></li>
      <li class="pull-right"><a href="{{ URL::to('posts/' . $post->category . '/new') }}"><i class="icon-pencil"></i> 글쓰기</a></li>
    </ul>
  </div>
</div>
@stop