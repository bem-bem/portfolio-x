@extends('layouts.app')

@section('content')
<!-- Page content-->
<div class="container">
  <div class="row">
    <!-- Blog entries-->
    <div class="col-lg-8">

      <!-- Nested row for non-featured blog posts-->
      <div class="row">
        @forelse ($posts as $post)
        <div class="col-lg-12">
          <!-- Blog post-->
          <x-pages.blog-posts :post="$post"></x-pages.blog-posts>
        </div>
        @empty
        <h1>no posts found</h1>
        @endforelse
      </div>
      <!-- Pagination-->
      {{ $posts->links() }}
    </div>
    <!-- Side widgets-->
    <div class="col-lg-4">
      <!-- Search widget-->
      <div class="card mb-4">
        <div class="card-header">Search</div>
        <div class="card-body">
          <div class="input-group">
            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..."
              aria-describedby="button-search" />
            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
          </div>
        </div>
      </div>
      <!-- Categories widget-->
      <x-widgets.categories :categories="$categories"></x-widgets.categories>
      <!-- Recent posts widget-->
      <x-widgets.recent-posts :recent_posts="$recent_posts"></x-widgets.recent-posts>
      <!-- Tags widget-->
      <x-widgets.tags :tags="$tags"></x-widgets.tags>
    </div>
  </div>
</div>
@endsection