<!-- resources/views/blogs/latest.blade.php -->

@extends('dashboard.layaout.app')
<style>
    .container img {
        max-width: 50%;
        /* Ensures the image does not exceed the container's width */
        height: auto;
        /* Maintains the aspect ratio */
    }
</style>

@section('content')
@if($latestBlog)
<div class="blog-post">
    <h1>{{ $latestBlog->title }}</h1>
    <p><strong>Type:</strong> {{ $latestBlog->type }}</p>
    <p><strong>Start Date:</strong> {{ $latestBlog->start_date }}</p>
   <div  class="container">
  
        {!! $latestBlog->content !!}
    
   </div>
    @if($latestBlog->image_path)
    <img src="{{ asset('storage/' . $latestBlog->image_path) }}" alt="{{ $latestBlog->title }}">
    @endif
</div>
@else
<p>No blog posts found.</p>
@endif
@endsection