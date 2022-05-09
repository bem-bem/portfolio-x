@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @forelse ($categories as $category)
          <div class="col-md-3 mb-3">
            <div class="card">
              <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="{{ route('category.show', [$category]) }}">{{ $category->name }}</a></li>
                <li class="list-group-item">{{ $category->post_count }}</li>
                <li class="list-group-item">{{ $category->user->name }}</li>
                <li class="list-group-item">{{ $category->created_at->diffForHumans() }}</li>
              </ul>
            </div>
          </div>
      @empty
          <p>No categories Found</p>
      @endforelse
    </div>
    <div class="row">
      <div class="col">
        <!-- Pagination-->
        {{ $categories->links() }}
      </div>
    </div>
  </div>
@endsection