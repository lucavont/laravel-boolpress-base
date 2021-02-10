@extends('layouts.main')
@section('content')
<div class="row">
  @foreach ($posts as $post)
  <div class="col-6" style="padding: 0">
    <div class="card">
      <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p class="card-text">{{ $post->postInformation->description }}</p>
          <p class="card-text">{{ $post->category->title }}</p>
          <p class="card-text">
            <span>Tags:</span>
          @foreach($post->tags as $tag)
          <a href="#" class="btn btn-primary">{{ $tag->title }}</a>
          @endforeach
          </p>
      </div>
    </div>  
  </div>
  @endforeach
</div>
@endsection