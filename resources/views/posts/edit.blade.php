@extends('layouts.master', ['title' => 'Update post'])

@section('head')
    <style>
        body {
            background: black;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header">Update post: {{ $post->title }}</div>
                <div class="card-body">
                    <form action="/posts/{{ $post->slug }}/edit" method="post" autocomplete="off" enctype="multipart/form-data">
                        @method('patch')
                        @csrf
                        @include('posts.partials.form-control')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop