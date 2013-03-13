@extends('layouts.default')
 
@section('content')
<div class="hero-unit">
  <h1>Laravel 프레임워크</h1>
  <p>Laravel 프레임워크를 사용하는 한국 사용자 모임입니다.</p>
</div>


<table class="table">
  <thead>
    <tr>
      <th class="post-id">#</th>
      <th class="post-title">제목</th>
      <th class="post-author">글쓴이</th>
      <th class="post-created-at">등록</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($posts as $post)
    <tr>
      <td class="post-id">{{ $post->id }}</td>
      <td class="post-title"><span class="label label-cat-{{ $post->category }}">{{ $categories[$post->category] }}</span> <a href="{{ URL::to('posts/' . $post->id) }}">{{ $post->title }}</a> <small>[<a href="{{ URL::to('posts/' . $post->id) }}#disqus_thread" title="코멘트">0</a>]<small></td>
      <td class="post-author"><a href="{{ URL::to('users/' . $post->user->id . '/' . $post->user->username) }}">{{ $post->user->nickname }}</a></td>
      <td class="post-created-at">{{ Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->diffForHumans() }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop