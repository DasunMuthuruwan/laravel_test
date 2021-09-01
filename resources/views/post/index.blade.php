@extends('main')
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form action="{{ route('post') }}" method="GET">
                <div class="input-group mb-3 mt-4">
                    <input type="text" class="form-control form-control-md" placeholder="Search Here" name="search" required>
                    <button type="submit" class="input-group-text btn-success"><i class="bi bi-search me-2"></i> Search</button>
                </div>
            </form>

            @forelse ($posts as $post)
                <div class="card mt-4">
                    <div class="card-header">
                       {{ $post->description }}
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @forelse ($post->comments as $comment)
                                <li class="list-group-item">{{$comment->message}}</li>
                            @empty
                                <li class="list-group-item">Comment Not Found</li>
                            @endforelse
                          </ul>
                    </div>
                </div>
            @empty
            <li class="list-group-item">No result found <strong>{{request()->query('search')}}</strong></li>
            @endforelse
        </div>
    </div>
@endsection
