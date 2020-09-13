
@extends('layouts.app2')
@section('content2')


            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="/posts/{{$post->id}}" method="post">
                                        @method('PATCH')
                                        @csrf
                                        @include('posts.form')
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
            {{-- <div class="container-fluid">
                <h1>Post Update Here</h1>
    <style>
        .error{
            color: red;
        }
    </style>

    <form action="/posts/{{$post->id}}" method="POST">
        @method('PATCH')
        @csrf
        @include('posts.form')
        <input type="submit" value="Submit">
    </form>
            </div> --}}
            @endsection

