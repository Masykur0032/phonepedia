@extends('layouts.master')

@section('head')
    <style>
        body {
            background: black;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between">
            <div>
                @isset($category)
                    <h4 style="color:white">Merk: {{ $category->name }}</h4>
                @endisset

                @isset($tag)
                    <h4 style="color:white">Category: {{ $tag->name }}</h4>
                @endisset

                @if(!isset($tag) && !isset($category))
                    <h4 style="color:white">All Post</h4>
                @endif
            </div>
        </div>
        <hr style="border-color: gray;">
        <div class="row">
            
                @forelse($posts as $post)
            <div class="col-md-6">
                <div class="card mb-4">
                    @if($post->thumbnail)
                    <a href="{{ route('posts.show', $post->slug) }}">
                        <img style="width: 100%; height: 200px; object-fit: cover; object-position: center;" class="card-image-top"  src="{{ $post->takeImage }}">
                    </a>
                    @endif
                    <div class="card-body">
                        <div>
                            <a href="{{ route('categories.show', $post->category->slug) }}" class="text-secondary">
                                <small>{{ $post->category->name }} | </small>
                            </a>

                            @foreach($post->tags as $tag)
                                <a href="{{ route('tags.show', $tag->slug) }}" class="text-secondary">
                                    <small>{{ $tag->name }}</small>
                                </a>
                            @endforeach
                        </div>
                        <h5>
                            <a class="text-dark" href="{{ route('posts.show', $post->slug) }}" class="card-title">
                                {{ $post->title }}
                            </a>
                        </h5>

                        <div class="text-secondary my-3">
                            {{ Str::limit($post->body, 100,'...') }}
                        </div>
                        <div class="d-flex justify-content-between align-items-center  mt-2">
                                    <div>
                                        By {{ $post->author->name }}
                                    </div>
                            <div class="text-secondary">
                                <small>
                                    published on {{ $post->created_at->diffForHumans() }}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                @empty
                    <div class="col-md-4">
                        <div class="alert alert-info">
                            Tidak ada post yang ditampilkan.
                        </div>
                    </div>
                @endforelse 
            
        </div>       
    
        </div>
            <div class="d-flex justify-content-center">
                <div>
                    {{ $posts->links() }}
                </div>
            </div>
            <hr style="border-color: gray;">
            
    </div>
@stop