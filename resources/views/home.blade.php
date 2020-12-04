@extends('layouts.master')

@section('head')
    <style>
        body {
            background: black;
        }
    </style>
@endsection

@section('content')
<center>
    <font size="2000" style="color: white;">
        <b>Welcome<br>to</b>
    </font>
</center>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center>
                        <img src="../images/phonepedia.jpg" alt="">
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
