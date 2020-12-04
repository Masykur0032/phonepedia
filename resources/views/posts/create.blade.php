@extends('layouts.master', ['title' => 'New post'])

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
                <div class="card-header">New post</div>
                <div class="card-body">
                    <form action="/posts/store" method="post" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @include('posts.partials.form-control', ['submit' => 'Create'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop