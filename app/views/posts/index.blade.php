@extends('layouts/default')

@section('content')
<div class="page-header">
  @include('posts.includes.header')
</div>

<div class="row">
  <div class="span3">
  @include('posts.includes.sidenav')
  </div>
  <div class="span9 posts-index">
    <table class="table">
      <thead>
        <tr>
          <th class="post-id">#</th>
          <th class="post-title">제목</th>
          <th class="post-author">글쓴이</th>
          <th class="post-created-at">등록</th>
          <th class="post-views">조회</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
        <tr>
          <td class="post-id">{{ $post->id }}</td>
          <td class="post-title"><a href="{{ URL::to('posts/' . $post->id) }}">{{ $post->title }}</a> <small>[<a href="{{ URL::to('posts/' . $post->id) }}#disqus_thread" title="코멘트">0</a>]<small></td>
          <td class="post-author"><a href="{{ URL::to('users/' . $post->user->id . '/' . $post->user->username) }}">{{ $post->user->nickname }}</a></td>
          <td class="post-created-at">{{ Carbon::createFromFormat('Y-m-d H:i:s', $post->created_at)->diffForHumans() }}</td>
          <td class="post-views">{{ $post->views }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <ul class="nav nav-pills">
      <li class="pull-right"><a href="{{ URL::to('posts/' . $category . '/new') }}"><i class="icon-pencil"></i> 글쓰기</a></li>
    </ul>
    {{ $posts->links() }}
  </div>
</div>
@stop